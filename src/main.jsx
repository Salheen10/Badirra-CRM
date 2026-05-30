import React, { useState, useEffect } from 'react'
import {createRoot} from 'react-dom/client'
import './index.css'
import AppSwitcher from './components/AppSwitcher'
import { getSuiteModules } from './utils/getSuiteModules'

const EnterpriseApp = () => {
  const [enterpriseMode, setEnterpriseMode] = useState(false);
  const [isSwitcherOpen, setIsSwitcherOpen] = useState(false);
  const [modules, setModules] = useState([]);
  
  // Use state for isHomeScreen so it can update dynamically during SuiteCRM AJAX navigation
  const [isHomeScreen, setIsHomeScreen] = useState(() => {
    return window.location.search === '' || 
           (window.location.search.includes('module=Home') && !window.location.search.includes('action=EditView'));
  });

  useEffect(() => {
    // Continuously monitor the URL for SuiteCRM AJAX navigation
    const checkUrl = () => {
      const currentIsHome = window.location.search === '' || 
                            (window.location.search.includes('module=Home') && !window.location.search.includes('action=EditView'));
      if (currentIsHome !== isHomeScreen) {
        setIsHomeScreen(currentIsHome);
      }
    };
    
    // Check every 100ms
    const interval = setInterval(checkUrl, 100);
    
    return () => clearInterval(interval);
  }, [isHomeScreen]);

  useEffect(() => {
    // Initial check
    const checkMode = () => {
      const enterpriseMode = document.documentElement.getAttribute('data-enterprise') === 'true';
      setEnterpriseMode(enterpriseMode);
      if (enterpriseMode && modules.length === 0) {
        setModules(getSuiteModules());
      }
      if (!enterpriseMode) {
        setIsSwitcherOpen(false);
        document.body.classList.remove('ent-home-screen');
      } else if (isHomeScreen) {
        setIsSwitcherOpen(true);
        document.body.classList.add('ent-home-screen');
      } else {
        document.body.classList.remove('ent-home-screen');
      }
    };

    checkMode();

    // Listen for custom event or DOM changes triggered by the legacy JS
    const observer = new MutationObserver((mutations) => {
      mutations.forEach((mutation) => {
        if (mutation.attributeName === 'data-enterprise') {
          checkMode();
        }
      });
    });

    observer.observe(document.documentElement, { attributes: true });

    return () => {
      observer.disconnect();
    };
  }, [modules.length, isHomeScreen]);

  if (!enterpriseMode) return null;

  return (
    <AppSwitcher 
      modules={modules} 
      isOpen={isSwitcherOpen} 
      onClose={() => setIsSwitcherOpen(false)}
      isHomeScreen={isHomeScreen}
    />
  )
}

// Find or create navbar mount point
let navbarMountPoint = document.getElementById('ent-react-root');
if (!navbarMountPoint) {
  navbarMountPoint = document.createElement('div');
  navbarMountPoint.id = 'ent-react-root';
  // Insert at the very beginning of the body
  document.body.insertBefore(navbarMountPoint, document.body.firstChild);
}

const root = createRoot(navbarMountPoint);
root.render(<EnterpriseApp />);

// Ensure the theme is set on the document element for Tailwind dark mode
if (localStorage.getItem('badirra_dark_mode') === '1' || localStorage.getItem('theme') === 'dark') {
  document.documentElement.classList.add('dark');
} else {
  document.documentElement.classList.remove('dark');
}

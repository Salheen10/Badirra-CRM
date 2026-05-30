import React from 'react';

export default function Navbar({ onToggleAppSwitcher, isAppSwitcherOpen }) {
  return (
    <nav className="w-full bg-[#714B67] text-white shadow-md h-[50px] flex items-center justify-between px-4 z-[9000] fixed top-0 left-0">
      <div className="flex items-center">
        <div 
          onClick={onToggleAppSwitcher}
          className="flex items-center justify-center p-2 rounded-lg cursor-pointer hover:bg-white/10 transition-colors"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
            <rect x="3" y="3" width="7" height="7" rx="1"></rect>
            <rect x="14" y="3" width="7" height="7" rx="1"></rect>
            <rect x="14" y="14" width="7" height="7" rx="1"></rect>
            <rect x="3" y="14" width="7" height="7" rx="1"></rect>
          </svg>
        </div>
        <a href="index.php?module=Home&action=index" className="font-bold text-xl ml-4 decoration-transparent text-white hover:text-white/90">
          Badirra CRM
        </a>
      </div>
      <div className="flex items-center">
        {/* We leave space here so the legacy SuiteCRM User Profile and Search can be positioned over this via CSS */}
      </div>
    </nav>
  );
}

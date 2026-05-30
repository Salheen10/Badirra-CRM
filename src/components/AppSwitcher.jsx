import React, { useState, useEffect, useMemo } from 'react';
import { Search } from 'lucide-react';

export default function AppSwitcher({ modules, isOpen, onClose, isHomeScreen }) {
  const [searchTerm, setSearchTerm] = useState('');

  // Reset search when opened
  useEffect(() => {
    if (isOpen) setSearchTerm('');
  }, [isOpen]);

  // Optimize filtering to prevent unnecessary recalculations
  const filteredModules = useMemo(() => {
    if (!searchTerm) return modules;
    const lowerSearch = searchTerm.toLowerCase();
    return modules.filter(mod => mod.name.toLowerCase().includes(lowerSearch));
  }, [modules, searchTerm]);

  if (!isOpen) return null;

  return (
    <div className={`fixed inset-0 top-[50px] z-[900] bg-[#f0f2f5]/95 dark:bg-[#121212]/95 backdrop-blur-[20px] overflow-y-auto transition-all duration-300`}>
      <div className="max-w-[1200px] mx-auto p-10 mt-6 lg:mt-12">
        
        {/* Header & Search */}
        <div className="flex flex-col items-center mb-12 lg:mb-20 gap-6 w-full animate-app-pop">

          
          {/* Minimalist Premium Search Bar */}
          <div className="relative w-full max-w-2xl mx-auto flex items-center justify-center group ent-search-container">
            <style>
              {`
                #ent-search-input {
                  padding: 1.25rem 2rem 1.25rem 4rem !important;
                  border-radius: 30px !important;
                  border: 1px solid rgba(150, 150, 150, 0.2) !important;
                  background-color: rgba(255, 255, 255, 0.8) !important;
                  color: #333333 !important;
                  box-shadow: 0 8px 30px rgba(0,0,0,0.06) !important;
                  height: auto !important;
                  line-height: normal !important;
                  box-sizing: border-box !important;
                  margin: 0 !important;
                  width: 100% !important;
                  font-size: 1.25rem !important;
                }
                html[data-theme="dark"] #ent-search-input,
                html.dark #ent-search-input {
                  background-color: rgba(30, 30, 30, 0.8) !important;
                  border-color: rgba(100, 100, 100, 0.3) !important;
                  color: #f3f4f6 !important;
                }
                #ent-search-input:focus {
                  outline: none !important;
                  border-color: rgba(147, 51, 234, 0.5) !important;
                  box-shadow: 0 0 0 4px rgba(147, 51, 234, 0.15), 0 8px 30px rgba(0,0,0,0.06) !important;
                }
                /* Also force the placeholder color to adapt */
                #ent-search-input::placeholder {
                  color: #9ca3af !important;
                }
              `}
            </style>
            <Search 
              className="absolute left-6 text-gray-400 group-focus-within:text-purple-500 transition-colors duration-300" 
              size={24} 
              strokeWidth={2.5}
              style={{ zIndex: 10, pointerEvents: 'none' }} 
            />
            <input 
              id="ent-search-input"
              type="text" 
              placeholder="Find an app..." 
              value={searchTerm}
              onChange={(e) => setSearchTerm(e.target.value)}
              className="font-medium transition-all duration-300 backdrop-blur-md"
              autoFocus
            />
          </div>
        </div>

        {/* App Grid with Premium 3D Odoo Style */}
        <div className="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-x-6 gap-y-12 pb-20">
          {filteredModules.map((mod, index) => (
            <a 
              key={index} 
              href={mod.href}
              className="flex flex-col items-center gap-4 group decoration-transparent animate-app-pop"
              style={{ animationDelay: `${index * 25}ms` }}
            >
              <div 
                className="w-[100px] h-[100px] sm:w-[110px] sm:h-[110px] rounded-[28px] flex items-center justify-center text-white transition-all duration-[400ms] ease-[cubic-bezier(0.175,0.885,0.32,1.275)] group-hover:-translate-y-3"
                style={{ 
                  background: `linear-gradient(135deg, ${adjustColor(mod.color, 20)} 0%, ${mod.color} 50%, ${adjustColor(mod.color, -20)} 100%)`,
                  boxShadow: `0 15px 35px -5px ${mod.color}80, inset 0 3px 6px rgba(255,255,255,0.4), inset 0 -4px 6px rgba(0,0,0,0.2), 0 2px 4px rgba(0,0,0,0.2)`,
                  border: '1px solid rgba(255,255,255,0.2)'
                }}
              >
                <div className="transform transition-transform duration-[400ms] group-hover:scale-110 drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">
                  {mod.Icon ? <mod.Icon size={52} strokeWidth={1.5} /> : <span className="text-4xl font-bold">{mod.initial}</span>}
                </div>
              </div>
              <span className="text-[15px] leading-tight font-semibold text-gray-800 dark:text-gray-200 text-center px-1 drop-shadow-sm transition-colors group-hover:text-purple-700 dark:group-hover:text-purple-400">
                {mod.name}
              </span>
            </a>
          ))}
          {filteredModules.length === 0 && (
            <div className="col-span-full flex flex-col items-center justify-center text-gray-400 mt-16 gap-4 animate-app-pop">
              <Search size={48} strokeWidth={1} />
              <p className="text-xl font-medium">No apps found matching "{searchTerm}"</p>
            </div>
          )}
        </div>
      </div>
    </div>
  );
}

// Helper to darken colors for the premium gradient look
function adjustColor(color, amount) {
    return '#' + color.replace(/^#/, '').replace(/../g, color => ('0'+Math.min(255, Math.max(0, parseInt(color, 16) + amount)).toString(16)).substr(-2));
}

import { 
  Users, Briefcase, FileText, Phone, Mail, Calendar, 
  Settings, FolderOpen, Target, CheckSquare, 
  BarChart2, Shield, Box, Component, Building, 
  CircleDollarSign, Magnet, FileSpreadsheet, Receipt,
  FileSignature, LifeBuoy, ListTodo, StickyNote,
  PhoneOutgoing, CalendarDays, Folders, Megaphone,
  PieChart, Presentation,
  Crosshair, ClipboardList, LayoutTemplate, Ticket,
  Tags, FileCode, BookOpen, Library, Mails, ClipboardType
} from 'lucide-react';

export function getSuiteModules() {
  const parsedModules = {};
  const moduleKeyMap = {};  // maps display name → internal module key
  
  // Try to find modules in the mobile menu (safest place, contains all)
  const moduleLinks = document.querySelectorAll('#mobile_menu li[data-test] > a');
  
  for (let i = 0; i < moduleLinks.length; i++) {
    const a = moduleLinks[i];
    let text = '';
    if (a.childNodes.length > 0) {
      text = a.childNodes[0].textContent.trim();
    } else {
      text = a.textContent.trim();
    }
    
    let href = '';
    if (a.getAttribute('onclick') && a.getAttribute('onclick').includes('window.location.href')) {
      const match = a.getAttribute('onclick').match(/'([^']+)'/);
      if (match) href = match[1];
    } else {
      href = a.href;
    }

    if (text && href && !parsedModules[text] && text !== 'Home') {
      parsedModules[text] = href;

      // Extract internal module key from the child span's onclick
      // The span always has: onclick="window.location.href = 'index.php?action=EditView&module=Accounts'"
      // This is the most reliable source because it's never AJAX-encoded
      const span = a.querySelector('span[onclick]');
      if (span) {
        const spanMatch = span.getAttribute('onclick').match(/module=([^'"&]+)/);
        if (spanMatch) {
          moduleKeyMap[text] = spanMatch[1];
        }
      }

      // Fallback: try to extract module key from the href/onclick URL
      if (!moduleKeyMap[text]) {
        try {
          const urlMatch = decodeURIComponent(href).match(/module=([^&]+)/);
          if (urlMatch) {
            moduleKeyMap[text] = urlMatch[1];
          }
        } catch (e) { /* ignore decoding errors */ }
      }
    }
  }

  // Add Administration / Settings if Admin
  const adminLink = document.querySelector('a[href*="module=Administration"]');
  if (adminLink) {
      parsedModules['Settings'] = adminLink.href;
      moduleKeyMap['Settings'] = 'Administration';
  }

  // Premium 3D-appropriate color and icon mapping
  // Keyed by INTERNAL module key (not display name) so it works in ANY language
  const moduleSpecs = {
    'Accounts':                      { icon: Building, color: '#714B67' }, 
    'Contacts':                      { icon: Users, color: '#017E84' },    
    'Opportunities':                 { icon: CircleDollarSign, color: '#e4a900' }, 
    'Leads':                         { icon: Magnet, color: '#d3413b' },      
    'AOS_Quotes':                    { icon: FileSpreadsheet, color: '#206b9b' }, 
    'AOS_Invoices':                  { icon: Receipt, color: '#00a09d' },  
    'AOS_Contracts':                 { icon: FileSignature, color: '#78564B' }, 
    'Cases':                         { icon: LifeBuoy, color: '#C95A4A' },    
    'Tasks':                         { icon: ListTodo, color: '#5C9EAD' },    
    'Notes':                         { icon: StickyNote, color: '#E5D05D' },  
    'Calls':                         { icon: PhoneOutgoing, color: '#4BA15A' }, 
    'Emails':                        { icon: Mail, color: '#4F7C9E' },       
    'Meetings':                      { icon: CalendarDays, color: '#D47345' }, 
    'Calendar':                      { icon: Calendar, color: '#D47345' },     
    'Documents':                     { icon: Folders, color: '#6A7F93' },     
    'Campaigns':                     { icon: Megaphone, color: '#A55D85' },   
    'AOR_Reports':                   { icon: PieChart, color: '#2C8E79' },      
    'Spots':                         { icon: Presentation, color: '#915C83' },
    'Administration':                { icon: Settings, color: '#444444' },     
    'Project':                       { icon: Briefcase, color: '#3A6351' },
    'AOS_Products':                  { icon: Box, color: '#C68B59' },
    'FP_Event_Locations':            { icon: Target, color: '#B04759' },
    'Prospects':                     { icon: Crosshair, color: '#563D7C' },
    'ProspectLists':                 { icon: ClipboardList, color: '#009688' },
    'AM_ProjectTemplates':           { icon: LayoutTemplate, color: '#D84315' },
    'FP_events':                     { icon: Ticket, color: '#1565C0' },
    'AOS_Products_Quotes':           { icon: Tags, color: '#00838F' },
    'AOS_PDF_Templates':             { icon: FileCode, color: '#4A148C' },
    'AOK_KnowledgeBase':             { icon: BookOpen, color: '#F9A825' },
    'AOK_Knowledge_Base_Categories': { icon: Library, color: '#E64A19' },
    'EmailTemplates':                { icon: Mails, color: '#283593' },
    'Surveys':                       { icon: ClipboardType, color: '#607D8B' },
  };

  const fallbackColors = ['#017e84', '#714B67', '#00a09d', '#e4a900', '#d3413b', '#206b9b', '#6c757d', '#17a2b8'];
  
  return Object.keys(parsedModules).map((modName, idx) => {
    // Look up the icon using the internal module key (language-independent)
    const internalKey = moduleKeyMap[modName];
    const spec = (internalKey && moduleSpecs[internalKey]) || moduleSpecs[modName] || {};
    const color = spec.color || fallbackColors[idx % fallbackColors.length];
    
    let initial = modName.charAt(0).toUpperCase();
    if (modName.length > 1 && modName.includes(' ')) {
      initial += modName.split(' ')[1].charAt(0).toUpperCase();
    } else if (modName.length > 1) {
      initial += modName.charAt(1).toLowerCase();
    }
    
    const IconComponent = spec.icon || Component;

    return {
      name: modName,
      href: parsedModules[modName],
      initial,
      color,
      Icon: IconComponent
    };
  });
}

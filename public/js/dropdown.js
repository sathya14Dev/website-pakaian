
function toggleMasterData() {
    const menu = document.getElementById('masterDataMenu');
    const icon = document.getElementById('masterDataIcon');
    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        menu.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

// Mobile sidebar toggle
document.getElementById('sidebarToggle')?.addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
});

// Close sidebar on mobile when clicking outside
document.addEventListener('click', function(e) {
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('sidebarToggle');
    
    if (window.innerWidth < 1280 && !sidebar.contains(e.target) && !toggle.contains(e.target)) {
        sidebar.classList.add('-translate-x-full');
    }
});


<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-2">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                </svg>
                <span class="text-xl font-bold text-gray-900">AgriGrow</span>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <?php
                $navItems = [
                    ['label' => 'Home', 'href' => '#'],
                    ['label' => 'Services', 'href' => '#services'],
                    ['label' => 'Products', 'href' => '#products'],
                    ['label' => 'About', 'href' => '#about'],
                    ['label' => 'Contact', 'href' => '#contact']
                ];
                
                foreach ($navItems as $item): ?>
                    <a href="<?php echo $item['href']; ?>" 
                       class="font-medium text-gray-700 hover:text-green-600 transition-colors duration-200 px-3 py-2 rounded-md hover:bg-green-50">
                        <?php echo $item['label']; ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors duration-200 font-medium">
                Get Started
            </button>
        </div>
    </div>
</header>
<?php
$footerSections = [
    'Services' => [
        'Crop Consulting',
        'Equipment Solutions',
        'Sustainable Farming'
    ],
    'Company' => [
        'About Us',
        'Our Team',
        'Careers'
    ],
    'Support' => [
        'Help Center',
        'Contact Us',
        'Privacy Policy'
    ]
];
?>

<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8">
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                    </svg>
                    <span class="text-xl font-bold">AgriGrow</span>
                </div>
                <p class="text-gray-400">
                    Empowering farmers with innovative agricultural solutions for a sustainable future.
                </p>
            </div>

            <?php foreach ($footerSections as $sectionTitle => $links): ?>
                <div>
                    <h4 class="font-semibold mb-4"><?php echo $sectionTitle; ?></h4>
                    <ul class="space-y-2 text-gray-400">
                        <?php foreach ($links as $link): ?>
                            <li><a href="#" class="hover:text-white transition-colors"><?php echo $link; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> AgriGrow. All rights reserved.</p>
        </div>
    </div>
</footer>
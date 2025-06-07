<?php
$contactInfo = [
    [
        'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>',
        'title' => 'Call Us',
        'info' => '+1 (555) 123-4567'
    ],
    [
        'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
        'title' => 'Email Us',
        'info' => 'info@agrigrow.com'
    ],
    [
        'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>',
        'title' => 'Visit Us',
        'info' => '123 Farm Road, Agriculture City'
    ]
];
?>

<section id="contact" class="py-20 bg-green-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-white mb-4">Get In Touch</h2>
            <p class="text-xl text-green-100">Ready to transform your agricultural operations?</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <?php foreach ($contactInfo as $contact): ?>
                <div class="text-center text-white">
                    <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <?php echo $contact['icon']; ?>
                    </div>
                    <h3 class="font-semibold mb-2"><?php echo $contact['title']; ?></h3>
                    <p class="text-green-100"><?php echo $contact['info']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <button class="bg-white text-green-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition-colors duration-200 font-semibold text-lg shadow-lg">
                Schedule Consultation
            </button>
        </div>
    </div>
</section>
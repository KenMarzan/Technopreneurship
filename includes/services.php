<?php
$services = [
    [
        'icon' => '<svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path></svg>',
        'title' => 'Crop Consulting',
        'description' => 'Expert advice on crop selection, planting, and harvest optimization for maximum yield.'
    ],
    [
        'icon' => '<svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path></svg>',
        'title' => 'Equipment Solutions',
        'description' => 'Modern farming equipment and machinery to enhance productivity and efficiency.'
    ],
    [
        'icon' => '<svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>',
        'title' => 'Sustainable Farming',
        'description' => 'Eco-friendly practices and organic solutions for sustainable agriculture.'
    ]
];
?>

<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive agricultural solutions designed to help you achieve optimal results 
                and sustainable growth in your farming operations.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php foreach ($services as $service): ?>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-2">
                    <div class="mb-6 p-3 bg-green-50 rounded-lg w-fit group-hover:bg-green-100 transition-colors duration-300">
                        <?php echo $service['icon']; ?>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4"><?php echo $service['title']; ?></h3>
                    <p class="text-gray-600 mb-6 leading-relaxed"><?php echo $service['description']; ?></p>
                    <button class="flex items-center text-green-600 font-medium hover:text-green-700 transition-colors duration-200">
                        Learn More 
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
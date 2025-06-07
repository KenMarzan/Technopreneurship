<?php
$products = [
    [
        'image' => 'https://images.pexels.com/photos/416978/pexels-photo-416978.jpeg?auto=compress&cs=tinysrgb&w=400',
        'title' => 'Organic Seeds',
        'description' => 'High-quality organic seeds for various crops'
    ],
    [
        'image' => 'https://images.pexels.com/photos/1595104/pexels-photo-1595104.jpeg?auto=compress&cs=tinysrgb&w=400',
        'title' => 'Bio Fertilizers',
        'description' => 'Eco-friendly fertilizers for sustainable growth'
    ],
    [
        'image' => 'https://images.pexels.com/photos/1595108/pexels-photo-1595108.jpeg?auto=compress&cs=tinysrgb&w=400',
        'title' => 'Farming Tools',
        'description' => 'Modern tools for efficient farming operations'
    ]
];
?>

<section id="products" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Featured Products</h2>
            <p class="text-xl text-gray-600">Premium agricultural products for modern farming</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($products as $product): ?>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="aspect-video overflow-hidden">
                        <img 
                            src="<?php echo $product['image']; ?>" 
                            alt="<?php echo $product['title']; ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo $product['title']; ?></h3>
                        <p class="text-gray-600 mb-4"><?php echo $product['description']; ?></p>
                        <button class="text-green-600 font-medium hover:text-green-700 transition-colors duration-200">
                            View Details →
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
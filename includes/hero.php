<?php
$stats = [
    ['number' => '500+', 'label' => 'Happy Farmers'],
    ['number' => '15+', 'label' => 'Years Experience'],
    ['number' => '1000+', 'label' => 'Acres Managed'],
    ['number' => '98%', 'label' => 'Success Rate']
];
?>

<section class="relative bg-gradient-to-br from-green-50 to-emerald-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Growing Your
                        <span class="text-green-600 block">Agricultural Success</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Empowering farmers with innovative solutions, expert guidance, and sustainable practices 
                        to maximize crop yields and build a prosperous future.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-green-600 text-white px-8 py-4 rounded-lg hover:bg-green-700 transition-all duration-200 font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Start Your Journey
                    </button>
                    <button class="border-2 border-green-600 text-green-600 px-8 py-4 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-200 font-semibold text-lg">
                        Learn More
                    </button>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 pt-8">
                    <?php foreach ($stats as $stat): ?>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600"><?php echo $stat['number']; ?></div>
                            <div class="text-sm text-gray-600 mt-1"><?php echo $stat['label']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl">
                    <img 
                        src="https://images.pexels.com/photos/2132227/pexels-photo-2132227.jpeg?auto=compress&cs=tinysrgb&w=800" 
                        alt="Modern farming landscape"
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center space-x-3">
                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Award Winning</div>
                            <div class="text-sm text-gray-600">Agricultural Solutions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
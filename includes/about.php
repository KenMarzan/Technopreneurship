<?php
$features = [
    'Expert agricultural consultants with proven track records',
    'Sustainable and eco-friendly farming practices',
    '24/7 support and guidance for all your farming needs',
    'Latest technology integration for maximum efficiency'
];
?>

<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-4xl font-bold text-gray-900">Why Choose AgriGrow?</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    With over 15 years of experience in agricultural innovation, we've helped thousands 
                    of farmers achieve remarkable success through our proven methodologies and cutting-edge solutions.
                </p>
                
                <div class="space-y-4">
                    <?php foreach ($features as $feature): ?>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                            </div>
                            <span class="text-gray-700"><?php echo $feature; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="relative">
                <img 
                    src="https://images.pexels.com/photos/1595104/pexels-photo-1595104.jpeg?auto=compress&cs=tinysrgb&w=600" 
                    alt="Agricultural team"
                    class="rounded-2xl shadow-2xl"
                />
                <div class="absolute -bottom-6 -right-6 bg-green-600 text-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center space-x-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">500+</div>
                            <div class="text-sm opacity-90">Satisfied Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
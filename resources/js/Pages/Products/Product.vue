 <script setup>
import { ref, onMounted } from 'vue';



// Quantity
const qty = ref(1);
function updateQty(val) {
  qty.value = Math.max(1, qty.value + val);
}

const switchTab = (tabName) =>{
            // Hide all contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected content
            document.getElementById('content-' + tabName).classList.remove('hidden');

            // Update tab styles
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('text-primary', 'border-primary');
                btn.classList.add('text-gray-500', 'dark:text-gray-400', 'border-transparent');
            });

            const activeBtn = document.getElementById('tab-' + tabName);
            activeBtn.classList.remove('text-gray-500', 'dark:text-gray-400', 'border-transparent');
            activeBtn.classList.add('text-primary', 'border-primary');
        }

// Images
const images = ref([
  'https://images.unsplash.com/photo-1626806775351-538068a21838?auto=format&fit=crop&q=80&w=1000',
  'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=300',
  'https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?auto=format&fit=crop&q=80&w=300',
  'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&q=80&w=300'
]);
const mainImage = ref(images.value[0]);
function changeImage(index) {
  mainImage.value = images.value[index];
}

// Tabs
const activeTab = ref('desc');

// Lucide icons init
onMounted(() => {
  switchTab("desc")
});
</script>

<template>


    <main class="pt-24 pb-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-sm text-gray-500 dark:text-gray-400">
            <ol class="flex items-center space-x-2">
                <li><a href="#" class="hover:text-primary">Home</a></li>
                <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                <li><a href="#" class="hover:text-primary">Cleaning & Laundry</a></li>
                <li><i data-lucide="chevron-right" class="w-4 h-4"></i></li>
                <li class="text-gray-900 dark:text-white font-medium">LG AI DD™ Washer</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Product Images Section -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="relative aspect-square bg-white dark:bg-dark-card rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 shadow-lg group">
                    <img id="mainImage" src="https://images.unsplash.com/photo-1626806775351-538068a21838?auto=format&fit=crop&q=80&w=1000"
                         alt="LG Washing Machine"
                         class="w-full h-full object-cover zoom-image cursor-zoom-in">

                    <!-- Badges -->
                    <div class="absolute top-4 left-4 flex flex-col gap-2">
                        <span class="bg-primary/90 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">NEW</span>
                        <span class="bg-blue-500/90 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">AI DD™</span>
                    </div>

                    <!-- Zoom Hint -->
                    <div class="absolute bottom-4 right-4 bg-black/50 text-white text-xs px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                        <i data-lucide="maximize" class="w-3 h-3 inline mr-1"></i> Hover to zoom
                    </div>
                </div>

                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-4">
                    <button onclick="changeImage(0)" class="thumb-btn aspect-square rounded-xl overflow-hidden border-2 border-primary bg-white dark:bg-dark-card transition-all hover:opacity-80">
                        <img src="https://images.unsplash.com/photo-1626806775351-538068a21838?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                    </button>
                    <button onclick="changeImage(1)" class="thumb-btn aspect-square rounded-xl overflow-hidden border-2 border-transparent bg-white dark:bg-dark-card transition-all hover:opacity-80 opacity-60 hover:opacity-100">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                    </button>
                    <button onclick="changeImage(2)" class="thumb-btn aspect-square rounded-xl overflow-hidden border-2 border-transparent bg-white dark:bg-dark-card transition-all hover:opacity-80 opacity-60 hover:opacity-100">
                        <img src="https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                    </button>
                    <button onclick="changeImage(3)" class="thumb-btn aspect-square rounded-xl overflow-hidden border-2 border-transparent bg-white dark:bg-dark-card transition-all hover:opacity-80 opacity-60 hover:opacity-100">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                    </button>
                </div>
            </div>

            <!-- Product Info Section -->
            <div class="flex flex-col">
                <!-- Header -->
                <div class="mb-6">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-primary font-semibold text-sm tracking-wider uppercase">LG Electronics</span>

                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2 text-gray-900 dark:text-white">LG F4V5RGP0W AI DD™ 9kg Front Load Washer</h1>
                    <p class="text-gray-500 dark:text-gray-400">AI Fabric Protection | Steam+™ | ThinQ™ Connectivity</p>
                </div>

                <!-- Price & Stock -->
                <div class="bg-gray-50 dark:bg-dark-card rounded-2xl p-6 mb-6 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-end gap-3 mb-4">
                        <span class="text-4xl font-bold text-primary">₼ 1,299</span>
                        <span class="text-lg text-gray-400 line-through mb-1">₼ 1,599</span>
                        <span class="bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 text-sm font-bold px-2 py-1 rounded mb-1">-18%</span>
                    </div>

                    <div class="flex items-center gap-2 text-sm text-green-600 dark:text-green-400 mb-4">
                        <i data-lucide="check-circle" class="w-4 h-4"></i>
                        <span class="font-medium">In Stock</span>
                        <span class="text-gray-400">- Ships within 24-72 hours</span>
                    </div>

                    <!-- Bulk Pricing Info -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                        <p class="text-sm font-semibold mb-3 flex items-center gap-2">
                            <i data-lucide="trending-down" class="w-4 h-4 text-primary"></i>
                            Bulk Business Pricing Available
                        </p>
                        <div class="grid grid-cols-3 gap-2 text-center text-sm">
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-2 border border-gray-200 dark:border-gray-600">
                                <div class="font-bold text-gray-900 dark:text-white">5+ units</div>
                                <div class="text-primary">₼ 1,199</div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-2 border border-gray-200 dark:border-gray-600">
                                <div class="font-bold text-gray-900 dark:text-white">10+ units</div>
                                <div class="text-primary">₼ 1,099</div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-2 border border-gray-200 dark:border-gray-600">
                                <div class="font-bold text-gray-900 dark:text-white">20+ units</div>
                                <div class="text-primary">Contact</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Key Specs Grid -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-blue-50 dark:bg-blue-900/20 border border-blue-100 dark:border-blue-800">
                        <div class="p-2 bg-blue-500 rounded-lg text-white">
                            <i data-lucide="scale" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Capacity</p>
                            <p class="font-bold text-gray-900 dark:text-white">9 kg</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-purple-50 dark:bg-purple-900/20 border border-purple-100 dark:border-purple-800">
                        <div class="p-2 bg-purple-500 rounded-lg text-white">
                            <i data-lucide="zap" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Spin Speed</p>
                            <p class="font-bold text-gray-900 dark:text-white">1400 rpm</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-orange-50 dark:bg-orange-900/20 border border-orange-100 dark:border-orange-800">
                        <div class="p-2 bg-orange-500 rounded-lg text-white">
                            <i data-lucide="thermometer" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Steam Function</p>
                            <p class="font-bold text-gray-900 dark:text-white">Yes</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-green-50 dark:bg-green-900/20 border border-green-100 dark:border-green-800">
                        <div class="p-2 bg-green-500 rounded-lg text-white">
                            <i data-lucide="volume-x" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Noise Level</p>
                            <p class="font-bold text-gray-900 dark:text-white">52 dB</p>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-xl overflow-hidden">
                        <button onclick="updateQty(-1)" class="px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors text-gray-600 dark:text-gray-300">
                            <i data-lucide="minus" class="w-4 h-4"></i>
                        </button>
                        <input type="number" id="qtyInput" value="1" min="1" class="w-16 text-center bg-transparent border-none focus:ring-0 font-bold text-gray-900 dark:text-white" readonly>
                        <button onclick="updateQty(1)" class="px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors text-gray-600 dark:text-gray-300">
                            <i data-lucide="plus" class="w-4 h-4"></i>
                        </button>
                    </div>

                    <button class="flex-1 bg-primary hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-xl flex items-center justify-center gap-2 transition-all transform hover:scale-[1.02] shadow-lg shadow-emerald-500/30">
                        <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                        Add to RFQ
                    </button>

                    <button class="p-3 border border-gray-300 dark:border-gray-600 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-gray-600 dark:text-gray-300">
                        <i data-lucide="heart" class="w-6 h-6"></i>
                    </button>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap gap-4 text-xs text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-gray-700 pt-6">
                    <div class="flex items-center gap-1">
                        <i data-lucide="shield-check" class="w-4 h-4 text-primary"></i>
                        <span>2 Year Warranty</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i data-lucide="truck" class="w-4 h-4 text-primary"></i>
                        <span>Free B2B Delivery</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i data-lucide="refresh-cw" class="w-4 h-4 text-primary"></i>
                        <span>30-Day Returns</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i data-lucide="file-text" class="w-4 h-4 text-primary"></i>
                        <span>GST Invoice</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Info Tabs -->
        <div class="mt-16">
            <div class="border-b border-gray-200 dark:border-gray-700 mb-8">
                <div class="flex space-x-8 overflow-x-auto">
                    <button @click="switchTab('desc')" id="tab-desc" class="tab-btn pb-4 text-primary border-b-2 border-primary font-medium whitespace-nowrap">Description</button>
                    <button @click="switchTab('specs')" id="tab-specs" class="tab-btn pb-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 font-medium whitespace-nowrap">Specifications</button>
                    <button @click="switchTab('features')" id="tab-features" class="tab-btn pb-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 font-medium whitespace-nowrap">Key Features</button>
                    <button @click="switchTab('shipping')" id="tab-shipping" class="tab-btn pb-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 font-medium whitespace-nowrap">Shipping & Returns</button>
                </div>
            </div>

            <!-- Tab Content -->
            <div id="content-desc" class="tab-content fade-in">
                <div class="prose dark:prose-invert max-w-none">
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">AI DD™: Next Generation Fabric Care</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        The LG F4V5RGP0W washing machine features revolutionary AI DD™ technology that detects not just the weight, but also the softness of fabric, and it chooses the optimal motions for the fabric by itself. This intelligent care system protects your fabrics while providing an impeccable clean.
                    </p>

                    <div class="grid md:grid-cols-2 gap-8 my-8">
                        <div class="bg-gray-50 dark:bg-dark-card p-6 rounded-2xl border border-gray-200 dark:border-gray-700">
                            <h4 class="font-bold text-lg mb-2 flex items-center gap-2 text-gray-900 dark:text-white">
                                <i data-lucide="cpu" class="w-5 h-5 text-primary"></i>
                                AI Direct Drive
                            </h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Based on big data of accumulated washing experience, AI DD™ offers the most Optimized washing motion in order to care your laundry.</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-dark-card p-6 rounded-2xl border border-gray-200 dark:border-gray-700">
                            <h4 class="font-bold text-lg mb-2 flex items-center gap-2 text-gray-900 dark:text-white">
                                <i data-lucide="cloud" class="w-5 h-5 text-primary"></i>
                                Steam+™ Technology
                            </h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">LG Steam+™ technology eliminates 99.9% of allergens, such as dust mites that can cause allergy or respiratory issues.</p>
                        </div>
                    </div>

                    <h4 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">SmartThinQ™ Technology</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        From remote control to extra downloadable cycles, your washing machine just got smarter. With Wi-Fi connectivity, you can control your machine from anywhere, receive notifications when cycles complete, and even download new washing programs.
                    </p>
                </div>
            </div>

            <div id="content-specs" class="tab-content hidden fade-in">
                <div class="bg-white dark:bg-dark-card rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <table class="w-full text-left">
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr class="bg-gray-50 dark:bg-gray-800/50">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white w-1/3">Brand</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">LG Electronics</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Model</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">F4V5RGP0W</td>
                            </tr>
                            <tr class="bg-gray-50 dark:bg-gray-800/50">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Type</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">Front Load Automatic</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Capacity</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">9 kg</td>
                            </tr>
                            <tr class="bg-gray-50 dark:bg-gray-800/50">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Maximum Spin Speed</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">1400 RPM</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Energy Efficiency</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">A+++ (-40%)</td>
                            </tr>
                            <tr class="bg-gray-50 dark:bg-gray-800/50">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Motor Type</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">Inverter Direct Drive</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Dimensions (WxHxD)</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">600 x 850 x 565 mm</td>
                            </tr>
                            <tr class="bg-gray-50 dark:bg-gray-800/50">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Weight</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">70 kg</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Connectivity</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">Wi-Fi (SmartThinQ™)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="content-features" class="tab-content hidden fade-in">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="group p-6 rounded-2xl bg-white dark:bg-dark-card border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary transition-all hover:shadow-lg">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <i data-lucide="brain" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">AI Fabric Detection</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Automatically detects fabric softness and weight to optimize washing motions.</p>
                    </div>

                    <div class="group p-6 rounded-2xl bg-white dark:bg-dark-card border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary transition-all hover:shadow-lg">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <i data-lucide="wind" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">TurboWash™ 360</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Complete washing in just 39 minutes with the same washing performance.</p>
                    </div>

                    <div class="group p-6 rounded-2xl bg-white dark:bg-dark-card border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary transition-all hover:shadow-lg">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <i data-lucide="smartphone" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">SmartThinQ™ App</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Control your washer remotely, download cycles, and track energy usage.</p>
                    </div>

                    <div class="group p-6 rounded-2xl bg-white dark:bg-dark-card border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary transition-all hover:shadow-lg">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <i data-lucide="sparkles" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Allergen Reduction</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Steam+™ removes 99.9% of dust mites and allergens from fabrics.</p>
                    </div>

                    <div class="group p-6 rounded-2xl bg-white dark:bg-dark-card border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary transition-all hover:shadow-lg">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <i data-lucide="volume-2" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Quiet Operation</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Inverter Direct Drive motor ensures minimal noise and vibration.</p>
                    </div>

                    <div class="group p-6 rounded-2xl bg-white dark:bg-dark-card border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary transition-all hover:shadow-lg">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <i data-lucide="droplets" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Add Item Function</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Pause and add forgotten items even after the wash cycle has started.</p>
                    </div>
                </div>
            </div>

            <div id="content-shipping" class="tab-content hidden fade-in">
                <div class="space-y-6">
                    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-2xl p-6">
                        <h4 class="font-bold text-lg mb-2 text-blue-900 dark:text-blue-100 flex items-center gap-2">
                            <i data-lucide="truck" class="w-5 h-5"></i>
                            B2B Delivery Information
                        </h4>
                        <p class="text-blue-800 dark:text-blue-200 text-sm mb-4">We specialize in bulk appliance logistics across India with GST-compliant invoicing.</p>
                        <ul class="space-y-2 text-sm text-blue-800 dark:text-blue-200">
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="w-4 h-4 mt-0.5 shrink-0"></i>
                                <span>Standard B2B Delivery: 24-72 hours for metro cities</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="w-4 h-4 mt-0.5 shrink-0"></i>
                                <span>Bulk orders (10+ units) may require 3-5 business days for scheduling</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="w-4 h-4 mt-0.5 shrink-0"></i>
                                <span>White-glove installation service available for orders above ₹50,000</span>
                            </li>
                        </ul>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-2xl p-6">
                            <h4 class="font-bold mb-3 text-gray-900 dark:text-white">Return Policy</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">30-day return window for manufacturing defects. Products must be in original packaging with all accessories.</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">B2B bulk returns require prior authorization from account manager.</p>
                        </div>
                        <div class="border border-gray-200 dark:border-gray-700 rounded-2xl p-6">
                            <h4 class="font-bold mb-3 text-gray-900 dark:text-white">Warranty</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">2 Years Comprehensive Warranty on product</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">10 Years Warranty on Inverter Direct Drive Motor (T&C apply)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="mt-20">
            <h3 class="text-2xl font-bold mb-8 text-gray-900 dark:text-white">Frequently Bought Together</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product Card 1 -->
                <div class="group bg-white dark:bg-dark-card rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gray-100 dark:bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-2 right-2 bg-white dark:bg-dark-card rounded-full p-1 shadow-md opacity-0 group-hover:opacity-100 transition-opacity">
                            <i data-lucide="heart" class="w-4 h-4 text-gray-600 dark:text-gray-300"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-900 dark:text-white mb-1 truncate">LG DVH5-08W Dryer</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">8kg Heat Pump Dryer</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-primary">₼ 999</span>
                            <button class="p-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-primary hover:text-white transition-colors">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="group bg-white dark:bg-dark-card rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gray-100 dark:bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-900 dark:text-white mb-1 truncate">Pedestal Drawer</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">Storage & Height Boost</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-primary">₼ 149</span>
                            <button class="p-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-primary hover:text-white transition-colors">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="group bg-white dark:bg-dark-card rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gray-100 dark:bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">HOT</span>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-900 dark:text-white mb-1 truncate">Stacking Kit</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">Washer-Dryer Stack</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-primary">₼ 79</span>
                            <button class="p-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-primary hover:text-white transition-colors">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="group bg-white dark:bg-dark-card rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gray-100 dark:bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-gray-900 dark:text-white mb-1 truncate">Detergent Pack</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">Liquid Detergent 3L</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-primary">₼ 29</span>
                            <button class="p-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-primary hover:text-white transition-colors">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</template>

<style>
/* Tailwind + custom styles from HTML */
body { font-family: 'Inter', sans-serif; }
.glass-effect { backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); }
.fade-in { animation: fadeIn 0.3s ease-in-out; }
@keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
.zoom-image { transition: transform 0.3s ease; }
.zoom-image:hover { transform: scale(1.05); }
::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: transparent; }
::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
.dark ::-webkit-scrollbar-thumb { background: #475569; }
</style>

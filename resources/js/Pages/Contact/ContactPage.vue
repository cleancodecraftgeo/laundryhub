<template>
  <!-- Hero Section -->
  <section class="pt-32 pb-16 bg-gradient-to-b from-emerald-50 to-white dark:from-emerald-900/20 dark:to-dark-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-6 text-gray-900 dark:text-white">
        Get in <span class="gradient-text">Touch</span>
      </h1>
      <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
        Have questions about bulk procurement? Our B2B specialists are here to help you find the perfect appliances for your business.
      </p>
    </div>
  </section>

  <!-- Contact Info Cards -->
  <section class="py-12 -mt-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-3 gap-6">
        <!-- Phone Card -->
        <div class="bg-white dark:bg-dark-card rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700 text-center group hover:shadow-xl transition-all hover:-translate-y-1">
          <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
            <i data-lucide="phone" class="w-8 h-8"></i>
          </div>
          <h3 class="font-bold text-xl mb-2 text-gray-900 dark:text-white">Call Us</h3>
          <p class="text-gray-500 dark:text-gray-400 mb-3">Mon-Sat, 9am to 6pm IST</p>
          <a href="tel:+911234567890" class="text-primary font-semibold text-lg hover:underline">+995 598 70 96 22</a>
          <p class="text-sm text-gray-400 mt-2">Toll-free for B2B inquiries</p>
        </div>

        <!-- Email Card -->
        <div class="bg-white dark:bg-dark-card rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700 text-center group hover:shadow-xl transition-all hover:-translate-y-1">
          <div class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
            <i data-lucide="mail" class="w-8 h-8"></i>
          </div>
          <h3 class="font-bold text-xl mb-2 text-gray-900 dark:text-white">Email Us</h3>
          <p class="text-gray-500 dark:text-gray-400 mb-3">We reply within 24 hours</p>
          <a href="mailto:b2b@homeease.com" class="text-secondary font-semibold text-lg hover:underline">mr.emailtoken@gmail.com</a>
          <p class="text-sm text-gray-400 mt-2">For quotes & support</p>
        </div>

        <!-- Office Card -->
        <div class="bg-white dark:bg-dark-card rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700 text-center group hover:shadow-xl transition-all hover:-translate-y-1">
          <div class="w-16 h-16 bg-purple-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500 group-hover:text-white transition-colors text-purple-500">
            <i data-lucide="map-pin" class="w-8 h-8"></i>
          </div>
          <h3 class="font-bold text-xl mb-2 text-gray-900 dark:text-white">Visit Us</h3>
          <p class="text-gray-500 dark:text-gray-400 mb-3">Headquarters</p>
          <p class="text-gray-900 dark:text-white font-medium">Gardabani, Kvemo-kartli</p>
          <p class="text-sm text-gray-400 mt-2">Georgia</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Contact Section -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="bg-white dark:bg-dark-card rounded-3xl p-8 md:p-10 shadow-xl border border-gray-200 dark:border-gray-700">
          <h2 class="text-3xl font-bold mb-2 text-gray-900 dark:text-white">Send us a Message</h2>
          <p class="text-gray-500 dark:text-gray-400 mb-8">Fill out the form below and we'll get back to you shortly.</p>

          <form @submit.prevent="submitForm" class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">First Name *</label>
                <input v-model="form.firstName" type="text" required class="contact-input" placeholder="Elnur">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Name *</label>
                <input v-model="form.lastName" type="text" required class="contact-input" placeholder="Jalilovi">
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address *</label>
                <input v-model="form.email" type="email" required class="contact-input" placeholder="mr.emailtoken@gmail.com">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Phone Number *</label>
                <input v-model="form.phone" type="tel" required class="contact-input" placeholder="+995 598 70 96 22">
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Company Name *</label>
              <input v-model="form.company" type="text" required class="contact-input" placeholder="Your Business Name">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Business Type</label>
              <select v-model="form.businessType" class="contact-input">
                <option value="">Select your business type</option>
                <option value="restaurant">Restaurant / Hotel</option>
                <option value="retail">Retail Store</option>
                <option value="corporate">Corporate Office</option>
                <option value="laundromat">Laundromat / Dry Cleaner</option>
                <option value="catering">Catering Service</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message *</label>
              <textarea v-model="form.message" rows="5" required class="contact-input resize-none" placeholder="Tell us about your requirements..."></textarea>
            </div>

            <div class="flex items-start gap-3">
              <input v-model="form.privacy" type="checkbox" id="privacy" required class="mt-1 w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary">
              <label for="privacy" class="text-sm text-gray-600 dark:text-gray-400">
                I agree to the <a href="#" class="text-primary hover:underline">Privacy Policy</a> and processing of my personal data.
              </label>
            </div>

            <button type="submit" class="w-full bg-primary hover:bg-emerald-600 text-white font-bold py-4 rounded-xl flex items-center justify-center gap-2 transition-all transform hover:scale-[1.02] shadow-lg shadow-emerald-500/30">
              <span>Send Message</span>
              <i data-lucide="send" class="w-5 h-5"></i>
            </button>
          </form>

          <!-- Success Message -->
          <div v-if="success" class="text-center py-12">
            <div class="w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
              <i data-lucide="check" class="w-10 h-10 text-green-600 dark:text-green-400"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Message Sent!</h3>
            <p class="text-gray-600 dark:text-gray-400">Thank you for contacting us. Our team will reach out to you within 24 hours.</p>
          </div>
        </div>

        <!-- Map & Support Cards (solved) -->
        <div class="space-y-8">
          <!-- Map -->
        <div class="bg-white dark:bg-dark-card rounded-3xl overflow-hidden shadow-xl border border-gray-200 dark:border-gray-700 h-80 md:h-96">
  <iframe
    src="https://www.google.com/maps?q=Gardabani,Georgia&output=embed"
    width="100%"
    height="100%"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    class="grayscale dark:grayscale opacity-80 dark:opacity-60">
  </iframe>
</div>


        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const success = ref(false)
const form = ref({
  firstName: '',
  lastName: '',
  email: '',
  phone: '',
  company: '',
  businessType: '',
  message: '',
  privacy: false
})

function submitForm() {
  success.value = true
  // buraya Axios ilə backend göndərə bilərsən
  // form.value = { ...reset fields... } // əgər lazım olsa
}

onMounted(() => {
  lucide.createIcons()
})


</script>

<style>
.contact-input {
  @apply w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-gray-600
         bg-white dark:bg-gray-800 text-gray-900 dark:text-white
         focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all;
}
.contact-input:invalid {
  border: 2px solid red;
}

.contact-input::placeholder {
  @apply text-gray-400;
}

body {
  font-family: 'Inter', sans-serif;
}

.gradient-text {
  background: linear-gradient(135deg, #10b981 0%, #0ea5e9 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>

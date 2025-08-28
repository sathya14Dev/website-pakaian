<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-800 via-green-700 to-emerald-800 font-sans">
  
  <div class="min-h-screen flex">
    <!-- Left Side - Welcome Content -->
    <div class="hidden lg:flex lg:w-1/2 flex-col justify-center px-16 text-white">
      <div>
        <div class="flex items-center gap-3 mb-12">
          <img src="{{ asset('logo.png') }}" alt="logo trisna collection" class=" w-48">
        </div>
        
        <h2 class="text-5xl font-bold mb-6 leading-tight">
          Selamat datang
        </h2>
        
        <p class="text-xl mb-4 text-green-100">
          Koleksi Kebaya Modern & Tradisional
        </p>
        
        <p class="text-green-200 leading-relaxed max-w-md">
          Temukan koleksi kebaya terbaik dengan desain elegan dan kualitas premium 
          untuk setiap momen istimewa Anda.
        </p>
      </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
      <div class="w-full max-w-md space-y-6">

        <!-- Card -->
        <div class="bg-white rounded-3xl shadow-2xl p-8">
          <div class="text-center mb-8">
            <h3 class="text-3xl font-bold text-gray-900 mb-2">Login</h3>
          </div>

          <form action="{{ route('login.submit') }}" method="POST" class="space-y-6" id="loginForm">
            @csrf
            
            <!-- Username -->
            <div>
              <input 
                type="text" 
                name="name" 
                placeholder="Username" 
                required
                class="w-full px-4 py-4 bg-gray-50 border border-gray-300 rounded-xl 
                       focus:outline-none focus:ring-2 focus:ring-green-500 
                       focus:border-transparent transition-all duration-200 
                       text-gray-900 placeholder-gray-500"
              >
            </div>

            <!-- Password -->
            <div class="relative">
              <input 
                type="password" 
                id="passwordInput"
                name="password" 
                placeholder="Password" 
                required
                class="w-full px-4 py-4 pr-12 bg-gray-50 border border-gray-300 rounded-xl 
                       focus:outline-none focus:ring-2 focus:ring-green-500 
                       focus:border-transparent transition-all duration-200 
                       text-gray-900 placeholder-gray-500"
              >
              <button 
                type="button"
                id="togglePassword"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none transition-colors duration-200"
              >
                <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <svg id="eyeSlashIcon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                </svg>
              </button>
            </div>

            <!-- Button -->
            <button 
              type="submit"
              id="loginButton"
              class="w-full bg-green-600 hover:bg-emerald-600 text-white 
                     font-semibold py-4 px-6 rounded-xl transition-all duration-200 
                     transform hover:scale-[1.02] active:scale-[0.98] 
                     shadow-lg hover:shadow-xl"
            >
              Login
            </button>
          </form>
          <!-- Error Message -->
            @if ($errors->any())
            <div class="bg-red-500 text-sm mt-4 text-white text-center rounded-lg p-4 shadow-lg">
            <span class="font-bold">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </span>
            </div>
        @endif
        </div>
      </div>
    </div>
  </div>

  <script>
    // Toggle Password Visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('passwordInput');
    const eyeIcon = document.getElementById('eyeIcon');
    const eyeSlashIcon = document.getElementById('eyeSlashIcon');

    togglePassword.addEventListener('click', function() {
      // Toggle password field type
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      
      // Toggle icons
      if (type === 'text') {
        eyeIcon.classList.add('hidden');
        eyeSlashIcon.classList.remove('hidden');
      } else {
        eyeIcon.classList.remove('hidden');
        eyeSlashIcon.classList.add('hidden');
      }
    });

    // Form submission with loading state
    const loginForm = document.getElementById('loginForm');
    const loginButton = document.getElementById('loginButton');
    
    loginForm.addEventListener('submit', function(e) {
      // Show loading state
      loginButton.innerHTML = `
        <div class="flex items-center justify-center">
          <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          Masuk...
        </div>
      `;
      loginButton.disabled = true;
      
      // Note: In production, remove the setTimeout below and let the form submit naturally
      // This is just for demo purposes
      /* 
      setTimeout(() => {
        loginButton.innerHTML = 'Login';
        loginButton.disabled = false;
      }, 2000);
      */
    });

    // Enhanced input focus effects
    const inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
    
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.classList.add('ring-2', 'ring-green-500', 'ring-opacity-50');
      });
      
      input.addEventListener('blur', function() {
        this.classList.remove('ring-2', 'ring-green-500', 'ring-opacity-50');
      });
    });
  </script>

</body>
</html>
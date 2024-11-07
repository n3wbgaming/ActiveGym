<!DOCTYPE html>
<html>
 <head>
  <title>
   Admin Login
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-[#2F2D2D] flex items-center justify-center min-h-screen">
  <div class="absolute top-0 left-0 w-full bg-[#808080] py-4">
   <div class="container mx-auto flex items-center">
    <img alt="Gym logo" class="h-10 w-10 mr-2" height="40" src="https://storage.googleapis.com/a1aa/image/2hqyT4fLrdWTJCUQ5yvwGopig5Z8TbS6KUmavDsEiKycUK3JA.jpg" width="40"/>
    <span class="text-white text-xl font-bold">
     ActiveGym
    </span>
   </div>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-sm mt-20">
   <h2 class="text-center text-2xl font-bold mb-6">
    ADMIN LOGIN
   </h2>
   <form>
    <div class="mb-4">
     <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Username" type="text"/>
    </div>
    <div class="mb-6 relative">
     <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="password" placeholder="Password" type="password"/>
     <i class="fas fa-eye absolute right-3 top-3 text-black cursor-pointer" id="togglePassword">
     </i>
    </div>
    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">
     Login
    </button>
   </form>
  </div>
  <script>
   const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
  </script>
 </body>
</html>
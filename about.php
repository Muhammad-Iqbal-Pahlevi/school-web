<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="src/output.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>SMA IT HSI IDN</title>
  </head>
  <body class="bg-[#26335D]">
    <!-- Navbar Start -->
    <nav
      class="transition-colors duration-500 bg-transparent fixed w-full z-10 top-0"
    >
      <div
        class="container mx-auto flex justify-between p-4 lg:px-20 items-center"
      >
        <h1 class="font-bold text-lg md:text-2xl text-white">
          <span class="text-sky-500">SMA</span> IT
        </h1>
        <ul class="hidden md:flex md:gap-8 text-white text-sm">
          <li
            class="hover:bg-gray-600 py-2 px-4 rounded transition-all duration-300 ease-in-out"
          >
            <a href="index.php">Home</a>
          </li>
          <li
            class="hover:bg-gray-600 py-2 px-4 rounded transition-all duration-300 ease-in-out"
          >
            <a href="">About</a>
          </li>
          <li
            class="hover:bg-gray-600 py-2 px-4 rounded transition-all duration-300 ease-in-out"
          >
            <a href="blog.php">Blog</a>
          </li>
        </ul>
        <div class="tombol flex gap-2">
          <button>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-[24px] fill-white"
              viewBox="0 0 256 256"
            >
              <path
                d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
              ></path>
            </svg>
          </button>
          <button onclick="openNavbar()" class="md:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-[24px] fill-white"
              viewBox="0 0 256 256"
            >
              <path
                d="M128,96a32,32,0,1,0,32,32A32,32,0,0,0,128,96Zm0,48a16,16,0,1,1,16-16A16,16,0,0,1,128,144Zm0-64A32,32,0,1,0,96,48,32,32,0,0,0,128,80Zm0-48a16,16,0,1,1-16,16A16,16,0,0,1,128,32Zm0,144a32,32,0,1,0,32,32A32,32,0,0,0,128,176Zm0,48a16,16,0,1,1,16-16A16,16,0,0,1,128,224Z"
              ></path>
            </svg>
          </button>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Sidebar -->
    <aside
      class="aside h-screen bg-[#26335D] fixed top-0 left-0 transition-all duration-200 ease-in-out md:hidden z-10 p-12 -translate-x-full flex flex-col justify-between"
    >
      <ul class="flex flex-col gap-8 text-sm text-white">
        <li><a href="" class="font-bold text-xl">SMA IT HSI IDN</a></li>
        <li><a href="index.php">Home</a></li>
        <li>
          <a href="">About</a>
        </li>

        <li>
          <a href="blog.php">Blog</a>
        </li>
      </ul>
      <button
        onclick="closeNavbar()"
        class="font-light w-fit bg-slate-500 p-2 text-xs text-white"
      >
        Close Navbar
      </button>
    </aside>
    <!-- Sidebar -->

    <!-- Hero Start -->
    <section
      class="hero w-full h-screen bg-[url('../image/hero.jpg')] bg-cover bg-center"
    >
      <div
        class="container w-fit h-full mx-auto flex flex-col items-center justify-center p-8 gap-4"
      >
        <h4 class="text-white text-sm md:text-base font-light">Welcome to</h4>
        <h1
          class="text-white text-2xl font-bold tracking-widest sha md:text-4xl"
        >
          SMA IT <span class="text-sky-500">HSI IDN</span>
        </h1>
        <p class="text-white md:w-1/2 text-center text-sm font-light">
          Sekolah unggulan yang berfokus pada diniyah, ilmu teknologi dan bahasa
          asing.
        </p>
        <div class="flex gap-4">
          <button
            class="px-6 py-2 border-2 rounded text-white hover:bg-sky-700 hover:border-none font-medium transition-all duration-500 ease-in-out"
          >
            Profile
          </button>
          <button
            class="px-6 py-2 border-2 rounded text-white hover:bg-sky-700 hover:border-none font-medium transition-all duration-500 ease-in-out"
          >
            Video
          </button>
        </div>
      </div>
    </section>
    <!-- Hero Start -->

    <!-- Sejarah Start -->
    <section class="w-full">
      <div class="w-full h-full grid md:grid-cols-2">
        <div class="teks p-4 md:p-20 flex flex-col gap-4 justify-center">
          <h4 class="text-sm text-white font-extralight">Sejarah</h4>
          <h1 class="text-2xl md:text-4xl text-white font-bold tracking-widest">
            SMA IT HSI IDN
          </h1>
          <hr />
          <p class="text-sm font-light text-white text-justify">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
            iste, veniam est accusamus, ex ad placeat amet sed autem hic
            repudiandae illum laboriosam ratione provident ipsam magnam sint
            adipisci omnis ipsum. Provident exercitationem totam aliquid ea aut
            fugiat, explicabo quia deserunt facere pariatur tempore officiis
            ipsa ad aspernatur repellendus adipisci excepturi cumque placeat.
            Repudiandae quasi sed esse facere veritatis adipisci, optio atque
            tempore quisquam sit, quos error neque eveniet delectus aperiam
            quae, odit dolore ratione vitae magni. Dolorum quod laboriosam,
            tenetur tempore, nihil aspernatur culpa cupiditate a qui, esse
            possimus quos accusamus debitis reprehenderit repellat sunt minus
            quasi cum quaerat.
          </p>
        </div>
        <div class="image w-full h-full bg-slate-200">
          <img src="Image/hero.jpg" alt="" class="w-full h-full" />
        </div>
      </div>
    </section>
    <!-- Sejarah End -->

    <!-- Selayang pandang Start -->
    <section class="w-full">
      <div class="w-full h-full grid md:grid-cols-2">
        <div class="image w-full h-full bg-slate-200">
          <img src="Image/hero.jpg" alt="" class="w-full h-full" />
        </div>
        <div class="teks p-4 md:p-20 flex flex-col gap-4 justify-center">
          <h4 class="text-sm text-white font-extralight">Selayang Pandang</h4>
          <h1 class="text-2xl md:text-4xl text-white font-bold tracking-widest">
            SMA IT HSI IDN
          </h1>
          <hr />
          <p class="text-sm font-light text-white text-justify">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
            iste, veniam est accusamus, ex ad placeat amet sed autem hic
            repudiandae illum laboriosam ratione provident ipsam magnam sint
            adipisci omnis ipsum. Provident exercitationem totam aliquid ea aut
            fugiat, explicabo quia deserunt facere pariatur tempore officiis
            ipsa ad aspernatur repellendus adipisci excepturi cumque placeat.
            Repudiandae quasi sed esse facere veritatis adipisci, optio atque
            tempore quisquam sit, quos error neque eveniet delectus aperiam
            quae, odit dolore ratione vitae magni. Dolorum quod laboriosam,
            tenetur tempore, nihil aspernatur culpa cupiditate a qui, esse
            possimus quos accusamus debitis reprehenderit repellat sunt minus
            quasi cum quaerat.
          </p>
        </div>
      </div>
    </section>
    <!-- Selayang Pandang End -->

    <!-- Footer Start -->
    <footer>
      <div
        class="container w-full mx-auto px-8 py-12 flex flex-col md:flex-row gap-4 justify-between"
      >
        <div class="alamat flex flex-col gap-2">
          <div class="flex gap-3 items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-[24px]"
              fill="#fff"
              viewBox="0 0 256 256"
            >
              <path
                d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z"
              ></path>
            </svg>
            <h5 class="text-xs text-white font-light">
              Jln. Gatot Subroto Purworejo
            </h5>
          </div>
          <div class="flex gap-3 items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-[24px]"
              fill="#ffffff"
              viewBox="0 0 256 256"
            >
              <path
                d="M231.59,90.13h0C175.44,34,80.56,34,24.41,90.13c-20,20-21.92,49.49-4.69,71.71A16,16,0,0,0,32.35,168a15.8,15.8,0,0,0,5.75-1.08l49-17.37.29-.11a16,16,0,0,0,9.75-11.73l5.9-29.52a76.52,76.52,0,0,1,49.68-.11h0l6.21,29.75a16,16,0,0,0,9.72,11.59l.29.11,49,17.39a16,16,0,0,0,18.38-5.06C253.51,139.62,251.58,110.13,231.59,90.13ZM223.67,152l-.3-.12-48.82-17.33-6.21-29.74A16,16,0,0,0,158,93a92.56,92.56,0,0,0-60.34.13,16,16,0,0,0-10.32,12l-5.9,29.51L32.63,151.86c-.1,0-.17.13-.27.17-12.33-15.91-11-36.23,3.36-50.58,25-25,58.65-37.53,92.28-37.53s67.27,12.51,92.28,37.53C234.61,115.8,236,136.12,223.67,152Zm.32,48a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,200Z"
              ></path>
            </svg>
            <h5 class="text-xs text-white font-light">+6281-2345-6782</h5>
          </div>
          <div class="flex gap-3 items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-[24px]"
              fill="#ffffff"
              viewBox="0 0 256 256"
            >
              <path
                d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"
              ></path>
            </svg>
            <h5 class="text-xs text-white font-light">smaithsiidn@gmail.com</h5>
          </div>
        </div>
        <div class="layanan text-white">
          <h4 class="text-sm font-semibold mb-4">Tentang Kami</h4>
          <ul class="">
            <li><a href="" class="text-xs font-light">Kursus</a></li>
            <li>
              <a href="" class="text-xs font-light">Future Students</a>
            </li>
            <li>
              <a href="" class="text-xs font-light">Keterangan</a>
            </li>
            <li>
              <a href="" class="text-xs font-light">Akreditasi</a>
            </li>
            <li>
              <a href="" class="text-xs font-light">Sekolah Terpadu</a>
            </li>
          </ul>
        </div>
        <div class="Sumber text-white">
          <h4 class="text-sm font-semibold mb-4">Suport</h4>
          <ul>
            <li><a href="" class="text-xs font-light">HSI</a></li>
            <li>
              <a href="" class="text-xs font-light">IDN</a>
            </li>
          </ul>
        </div>
        <div class="Company text-white">
          <h4 class="text-sm font-semibold mb-4">Jaringan</h4>
          <ul c>
            <li>
              <a href="" class="text-xs font-light">Univercity of Oxford</a>
            </li>
            <li>
              <a href="" class="text-xs font-light"
                >Universitas Islam Madinah</a
              >
            </li>
            <li>
              <a href="" class="text-xs font-light">Poltek IDN</a>
            </li>
            <li>
              <a href="" class="text-xs font-light">UGM</a>
            </li>
            <li>
              <a href="" class="text-xs font-light">ITB</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
    <section class="bg-white">
      <div class="container mx-auto px-4 py-8">
        <div class="media flex flex-col items-center gap-8">
          <h1 class="font-semibold text-[#26335D] text-xl">Social Media</h1>
          <ul class="flex flex-col md:flex-row gap-4 md:gap-8">
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="#26335D"
                viewBox="0 0 256 256"
              >
                <path
                  d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                ></path>
              </svg>
            </li>
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="#26335D"
                viewBox="0 0 256 256"
              >
                <path
                  d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                ></path>
              </svg>
            </li>
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="#26335D"
                viewBox="0 0 256 256"
              >
                <path
                  d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                ></path>
              </svg>
            </li>
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="#26335D"
                viewBox="0 0 256 256"
              >
                <path
                  d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                ></path>
              </svg>
            </li>
          </ul>
          <h1 class="copy-right text-[#26335D] text-xs text-center">
            © BY SMA IT HSI IDN
          </h1>
        </div>
      </div>
    </section>

    <script>
      var navbar = document.querySelector("nav");

      // Fungsi untuk mengubah background navbar saat di-scroll
      function handleScroll() {
        if (window.scrollY > 0) {
          navbar.classList.add("bg-[#26335D]", "shadow-md", "navbar-bg");
          navbar.classList.remove("bg-transparent");
        } else {
          navbar.classList.add("bg-transparent");
          navbar.classList.remove("bg-[#26335D]", "shadow-md", "navbar-bg");
        }
      }
      window.addEventListener("scroll", handleScroll);

      const sidebar = document.querySelector("aside");

      function openNavbar() {
        sidebar.classList.add("translate-x-0");
        sidebar.classList.remove("-translate-x-full");
      }
      function closeNavbar() {
        sidebar.classList.remove("translate-x-0");
        sidebar.classList.add("-translate-x-full");
      }
    </script>
  </body>
</html>

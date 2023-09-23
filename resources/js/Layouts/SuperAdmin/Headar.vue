<template>
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
       data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" :href="logoLink">
            <span class="brand-logo">
              <img :src="logo" alt="Logo" height="24">
            </span>
            <h2 class="brand-text mb-0">{{ brandName }}</h2>
          </a>
        </li>
      </ul>
    </div>
    <!-- المزيد من العناصر التفاعلية -->
  </nav>
  </template>

  <script>
  export default {
    name: "MyLayout",
  };
  </script>

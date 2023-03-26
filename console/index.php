<!DOCTYPE html>
<html lang="zh" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RapidCDB</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/ui/full.css" rel="stylesheet" type="text/css" />
  <link href="/ui/style.css" rel="stylesheet" type="text/css" />
  <script src="/tailwind.config.js"></script>
</head>

<body>
  <!--

-->
  <div class="bg-base-100 drawer drawer-mobile"><input id="drawer" type="checkbox" class="drawer-toggle">
    <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer"
        class="drawer-overlay"></label>
      <aside class="bg-base-200 w-80">
        <div
          class="z-20 bg-base-200 bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2 hidden lg:flex ">
          <a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2">
            <div class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl"><span
                class="">Rapid</span> <span class="text-base-content ">CDB</span></div>
          </a> <a href="" class="link link-hover font-mono text-xs text-opacity-50">
            <div class="tooltip tooltip-bottom">Server</div>
          </a>
        </div>

        <ul class="menu p-4 w-80 text-base-content">
          <!-- Sidebar content here -->
          <li><a sveltekit:prefetch="" href="./" id="" class="flex gap-4 active  "><span class="flex-none"><svg
                  width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  class="w-6 h-6 stroke-current">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                  </path>
                </svg></span><span class="flex-1">首页</span> </a></li>
          <li><a>Sidebar Item 2</a></li>

        </ul>


        <ul class="menu menu-compact flex flex-col p-0 px-4"> </ul>
        <div class="from-base-200 pointer-events-none sticky bottom-0 flex h-20 bg-gradient-to-t to-transparent"></div>
      </aside>

    </div>
    <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
      <div class="navbar bg-base-100">
        <div class="flex-1">

        </div>
        <div class="flex-none gap-2">

          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img src="https://avatars.githubusercontent.com/u/66934040?v=4" />
              </div>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">

              <li><a href="require/logout.php">退出</a></li>
            </ul>
          </div>


        </div>
      </div>
      <div class="px-6 xl:pr-2 pb-16">
        <div class="flex flex-col-reverse justify-between gap-6 xl:flex-row">
          <div class="stats shadow bg-primary text-primary-content">
            <div class="stat">
              <div class="stat-figure text-neutral-content">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
              </div>
              <div class="stat-title text-neutral-content">用户ID</div>
              <div class="stat-value text-neutral-content">5533459</div>
              <div class="stat-desc text-neutral-content">编程猫ID</div>
            </div>
            <div class="stat">
              <div class="stat-title text-neutral-content">余额</div>
              <div class="stat-value">￥0.00</div>
              <div class="stat-actions">
                <button class="btn btn-sm btn-success">获取余额</button>
              </div>
            </div>

            <div class="stat">
              <div class="stat-title text-neutral-content">最大容量</div>
              <div class="stat-value">1.00GB</div>
              <div class="stat-actions">
                <button class="btn btn-sm">获取容量</button>
                
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
</body>

</html>
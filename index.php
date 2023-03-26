<!DOCTYPE html>
<html lang="zh" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RapidCDB</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../ui/full.css" rel="stylesheet" type="text/css" />
  <link href="../ui/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="navbar bg-base-100" style="position: fixed;">
    <div class="flex-1">
      <a href="/" class="btn btn-ghost normal-case text-xl">RapidCDB</a>
      </div>
      <div class="flex-none gap-2">

        <?php
        if (isset($_COOKIE["id"])) {
          echo '
        <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img src="'.$_COOKIE["avator"].'" />
          </div>
        </label>
        <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
          <li>
            <a class="justify-between">控制台</a>
          </li>
      
          <li><a href="require/logout.php">退出</a></li>
        </ul>
      </div> 
        ';
        } else {
          echo '<div class="flex-none">
<ul class="menu menu-horizontal px-1">
    <li><a href="/console/login.php">登录</a></li>
</ul>
</div>
';
        }
        ?>

      </div>
    </div>
    <div class="hero min-h-screen bg-base-200" style="background-image: -webkit-linear-gradient(right,#570df8,#946aee);">
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md"><br><br><br>
          <h1 class="text-5xl font-bold">RapidCDB</h1>
          <p class="py-6">
            RapidCDB是为CoCo定制的数据存储解决方案。它允许在云中轻松存储数据，使其易于读取和操作。与CoCo目前的解决方案相比，RapidCDB是一个更用户友好的数据存储解决方案。</p>
          <button class="btn btn-primary">开始使用</button>
        </div>
      </div>
    </div>
    <footer class="footer p-10 bg-neutral text-neutral-content">
      <div>
        <img src="./Rapid.svg" alt="" width="97">
        <p>© 2023 Rapid All rights reserved</p>
      </div> 
      <div>
        <span class="footer-title">社交媒体</span> 
        <div class="grid grid-flow-col gap-4">
          <a href="https://space.bilibili.com/1856704891"><img src="/img/bilibili.svg" alt=""></a>
        </div>
      </div>
    </footer>
  </body>

</php>
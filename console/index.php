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

    <div class="stats bg-primary text-primary-content">
  
        <div class="stat">
          <div class="stat-title text-neutral-content">余额</div>
          <div class="stat-value">￥0.00</div>
          <div class="stat-actions">
            <button class="btn btn-sm btn-success">Add funds</button>
          </div>
        </div>
        
        <div class="stat">
          <div class="stat-title text-neutral-content">最大容量</div>
          <div class="stat-value">1.00GB</div>
          <div class="stat-actions">
            <button class="btn btn-sm">Withdrawal</button> 
            <button class="btn btn-sm">deposit</button>
          </div>
        </div>
        
      </div>
      
</body>

</html>
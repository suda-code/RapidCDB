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
    <!-- <div class="flex-none gap-2">
          <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered" />
          </div>
          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img src="https://avatars.githubusercontent.com/u/66934040?v=4" />
              </div>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
              <li>
                <a class="justify-between">
                  控制台
                  <span class="badge">New</span>
                </a>
              </li>
              <li><a>设置</a></li>
              <li><a>登出</a></li>
            </ul>
          </div> -->
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <li><a>登录</a></li>
      </ul>
    </div>

  </div>
  </div>
  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="mockup-window border bg-base-300" style="width: 600px;">
        <h1 class="bg-base-200 text-center" style="font-size: 30px;font-weight: bold;height: 70px;padding-top: 15px;">
          又见面啦</h1>
        <div class="bg-base-200" style="padding: 5px 0 22px 0;">

          <!-- <input type="text" id="us" placeholder="手机号/用户名/邮箱"
            class="input input-bordered input-primary w-full max-w-xs" />
          <div style="height: 15px;"></div>
          <input id="pd" type="password" placeholder="密码" class="input input-bordered input-primary w-full max-w-xs" />
        <br> --><br><button class="btn btn-primary" onclick="login()">授权登录</button><br><br>

          <span>请使用<strong>编程猫账号</strong>登录</span>

          <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
          <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-3.6.0.min.js"></script>

          <script>
            function login() {
              var windowObjectReference;
              window.r = parseInt(Math.random() * (999999999999 + 1));
              window.windowObjectReference = window.open('https://api.bcmcreator.cn/login/bcm_login.php?rd=' + window.r, 'BCM', 'scrollbars=0,status=0,menubar=0,resizable=no,location=no,toolbar=no,top=150,left=150,height=900,width=600');
              window.wina = 1;
            }

            setInterval(() => {

              if (typeof(window.wina) != "undefined" && window.wina != 0) {

                if (window.windowObjectReference.closed) {


                  axios.get('http://api.bcmcreator.cn/login/code_bcm.php?rd=' + window.r)
                    .then(function(response) {
                      $.ajax({
                        url: '../require/login.php',
                        type: 'post',
                        data: {id:response["data"]["id"]},
                        success: function(res) {
                          document.cookie="id="+res+"; expires=Sun, 31 Dec 2023 12:00:00 GMT; path=/";
                          document.cookie="avator="+ response["data"]["avatar_url"]+"; expires=Sun, 31 Dec 2023 12:00:00 GMT; path=/";
                          window.location.href="../index.php"
                        },

                      });
                     
                    }).catch(function(error) {
                      console.log(error);
                    });
                  window.wina = 0
                }
              }

            }, 1000);
          </script>

        </div>
      </div>
    </div>
  </div>
</body>

</html>
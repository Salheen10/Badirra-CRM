{*
/**
 * Tabler UI Login Page for Badirra CRM
 */
*}
<script type='text/javascript'>
    var LBL_LOGIN_SUBMIT = '{sugar_translate module="Users" label="LBL_LOGIN_SUBMIT"}';
    var LBL_REQUEST_SUBMIT = '{sugar_translate module="Users" label="LBL_REQUEST_SUBMIT"}';
    var LBL_SHOWOPTIONS = '{sugar_translate module="Users" label="LBL_SHOWOPTIONS"}';
    var LBL_HIDEOPTIONS = '{sugar_translate module="Users" label="LBL_HIDEOPTIONS"}';
</script>

<div class="page page-center">
    <div class="container container-tight py-4">

        <!-- Theme toggle -->
        <div class="text-end mb-4">
            <a href="javascript:void(0)" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" id="tabler-theme-toggle-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" onclick="document.body.classList.remove('theme-light'); document.body.classList.add('theme-dark'); localStorage.setItem('tablerTheme', 'dark'); this.style.display='none'; document.getElementById('tabler-theme-toggle-light').style.display='';">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
            </a>
            <a href="javascript:void(0)" class="nav-link px-0 hide-theme-light" title="Enable light mode" id="tabler-theme-toggle-light" data-bs-toggle="tooltip" data-bs-placement="bottom" style="display:none;" onclick="document.body.classList.remove('theme-dark'); document.body.classList.add('theme-light'); localStorage.setItem('tablerTheme', 'light'); this.style.display='none'; document.getElementById('tabler-theme-toggle-dark').style.display='';">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
            </a>
        </div>
        
        {literal}
        <script>
            // Ensure toggle matches loaded theme state
            if(localStorage.getItem('tablerTheme') === 'dark') {
                document.body.classList.remove('theme-light');
                document.body.classList.add('theme-dark');
                document.getElementById('tabler-theme-toggle-dark').style.display='none';
                document.getElementById('tabler-theme-toggle-light').style.display='';
            }
        </script>
        {/literal}

        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="themes/default/images/company_logo.png" height="36" alt=""></a>
        </div>

        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Login to your account</h2>

                {if $LOGIN_ERROR_MESSAGE}
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex">
                            <div>{$LOGIN_ERROR_MESSAGE}</div>
                        </div>
                    </div>
                {/if}
                {if $LOGIN_ERROR !=''}
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex">
                            <div>{$LOGIN_ERROR}</div>
                        </div>
                    </div>
                    {if $WAITING_ERROR !=''}
                        <div class="alert alert-warning" role="alert">
                            <div class="d-flex">
                                <div>{$WAITING_ERROR}</div>
                            </div>
                        </div>
                    {/if}
                {else}
                    <span id='post_error' class="text-danger"></span>
                {/if}

                <form action="index.php" method="post" name="DetailView" id="form" onsubmit="return document.getElementById('cant_login').value == ''" autocomplete="off">
                    
                    <input type="hidden" name="module" value="Users">
                    <input type="hidden" name="action" value="Authenticate">
                    <input type="hidden" name="return_module" value="Users">
                    <input type="hidden" name="return_action" value="Login">
                    <input type="hidden" id="cant_login" name="cant_login" value="">
                    {foreach from=$LOGIN_VARS key=key item=var}
                        <input type="hidden" name="{$key}" value="{$var}">
                    {/foreach}

                    <div class="mb-3">
                        <label class="form-label">{sugar_translate module="Users" label="LBL_USER_NAME"}</label>
                        <input type="text" class="form-control" placeholder="{sugar_translate module="Users" label="LBL_USER_NAME"}" required autofocus tabindex="1" id="user_name" name="user_name" value='{$LOGIN_USER_NAME|escape}' autocomplete="off">
                    </div>

                    <div class="mb-2">
                        <label class="form-label">
                            {sugar_translate module="Users" label="LBL_PASSWORD"}
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="{sugar_translate module="Users" label="LBL_PASSWORD"}" tabindex="2" id="username_password" name="username_password" value='{$LOGIN_PASSWORD}' autocomplete="off">
                        </div>
                    </div>

                    {if !empty($SELECT_LANGUAGE)}
                    <div class="mb-3">
                        <label class="form-label">{sugar_translate module="Users" label="LBL_LANGUAGE"}</label>
                        <select name='login_language' class="form-select" onchange="switchLanguage(this.value)">
                            {$SELECT_LANGUAGE}
                        </select>
                    </div>
                    {/if}

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100" tabindex="3" name="Login">{sugar_translate module="Users" label="LBL_LOGIN_BUTTON_LABEL"}</button>
                    </div>
                </form>

                <div class="text-center text-muted mt-3" style="display:{$DISPLAY_FORGOT_PASSWORD_FEATURE};" onclick='toggleDisplay("forgot_password_dialog");'>
                    <a href="javascript:void(0)" tabindex="-1">{sugar_translate module="Users" label="LBL_LOGIN_FORGOT_PASSWORD"}</a>
                </div>

                <!-- Forgot Password Dialog -->
                <form class="passform" role="form" action="index.php" method="post" name="fp_form" id="fp_form" autocomplete="off">
                    <div id="forgot_password_dialog" style="display:none; margin-top:20px; padding-top:20px; border-top:1px solid var(--tblr-border-color);">
                        <input type="hidden" name="entryPoint" value="GeneratePassword">
                        <div id="generate_success" class='text-danger'></div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="fp_user_name" name="fp_user_name" value='{$LOGIN_USER_NAME|escape}' placeholder="{sugar_translate module="Users" label="LBL_USER_NAME"}" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="fp_user_mail" name="fp_user_mail" value='' placeholder="{sugar_translate module="Users" label="LBL_EMAIL"}" autocomplete="off">
                        </div>

                        {$CAPTCHA}
                        <div id='wait_pwd_generation'></div>
                        <button class="btn btn-primary w-100" type="button" onclick="validateAndSubmit(); return document.getElementById('cant_login').value == ''" id="generate_pwd_button" name="fp_login">
                            {sugar_translate module="Users" label="LBL_LOGIN_SUBMIT"}
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <div class="text-center text-muted mt-3">
            <a href="https://badirra.com/" target="_blank" class="text-muted text-decoration-none">
                &copy; {$smarty.now|date_format:"%Y"} Badirra CRM
            </a>
        </div>
    </div>
</div>

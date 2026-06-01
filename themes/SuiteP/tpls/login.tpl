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

<div class="page page-center" style="background-color: #f4f6f8; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px;">
    
    <!-- Bulletproof centered container -->
    <div style="width: 100%; max-width: 420px; margin: 0 auto; box-sizing: border-box;">

        <div class="card" style="background: #fff; border: none; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.04);">
            <div class="card-body" style="padding: 3rem 2.5rem;">
                
                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <img src="{$COMPANY_LOGO_URL}" alt="Badirra CRM" style="max-width: 100%; max-height: 130px; width: auto; height: auto;">
                </div>

                <h2 style="text-align: center; font-weight: 700; color: #0f172a; font-size: 1.75rem; margin-top: 0; margin-bottom: 0.5rem; font-family: inherit;">Login</h2>
                <p style="text-align: center; font-size: 0.95rem; color: #64748b !important; margin-bottom: 2rem; margin-top: 0;">Enter your details to access Badirra CRM</p>

                {if $LOGIN_ERROR_MESSAGE}
                    <div style="padding: 1rem; border-radius: 8px; background: #fee2e2; color: #991b1b; margin-bottom: 1.5rem; text-align: center; font-size: 0.9rem;">
                        {$LOGIN_ERROR_MESSAGE}
                    </div>
                {/if}
                {if $LOGIN_ERROR !=''}
                    <div style="padding: 1rem; border-radius: 8px; background: #fee2e2; color: #991b1b; margin-bottom: 1.5rem; text-align: center; font-size: 0.9rem;">
                        {$LOGIN_ERROR}
                    </div>
                    {if $WAITING_ERROR !=''}
                        <div style="padding: 1rem; border-radius: 8px; background: #fef3c7; color: #92400e; margin-bottom: 1.5rem; text-align: center; font-size: 0.9rem;">
                            {$WAITING_ERROR}
                        </div>
                    {/if}
                {else}
                    <div id='post_error' style="color: #ef4444; font-size: 0.9rem; text-align: center; margin-bottom: 1rem;"></div>
                {/if}

                <form action="index.php" method="post" name="DetailView" id="form" onsubmit="return document.getElementById('cant_login').value == ''" autocomplete="off" style="margin: 0; padding: 0;">
                    
                    <input type="hidden" name="module" value="Users">
                    <input type="hidden" name="action" value="Authenticate">
                    <input type="hidden" name="return_module" value="Users">
                    <input type="hidden" name="return_action" value="Login">
                    <input type="hidden" id="cant_login" name="cant_login" value="">
                    {foreach from=$LOGIN_VARS key=key item=var}
                        <input type="hidden" name="{$key}" value="{$var}">
                    {/foreach}

                    <div style="margin-bottom: 1.5rem; text-align: left;">
                        <label style="display: block; font-weight: 500; color: #334155; font-size: 0.95rem; margin-bottom: 0.5rem; font-family: inherit;">Email Address *</label>
                        <input type="text" style="display: block; width: 100% !important; height: 48px; box-sizing: border-box; padding: 0 1rem; border-radius: 8px; border: 1px solid #e2e8f0; box-shadow: none; font-family: inherit; font-size: 1rem; color: #334155; background: #fff; transition: border-color 0.15s ease-in-out;" placeholder="you@example.com" required autofocus tabindex="1" id="user_name" name="user_name" value='{$LOGIN_USER_NAME|escape}' autocomplete="off">
                    </div>

                    <div style="margin-bottom: 1.5rem; text-align: left;">
                        <label style="display: block; font-weight: 500; color: #334155; font-size: 0.95rem; margin-bottom: 0.5rem; font-family: inherit;">Password *</label>
                        <div style="display: flex; align-items: center; border-radius: 8px; border: 1px solid #e2e8f0; background: #fff; width: 100%; height: 48px; box-sizing: border-box; transition: border-color 0.15s ease-in-out;">
                            <input type="password" style="flex: 1; width: 100% !important; min-width: 0; padding: 0 1rem; border: none; background: transparent; box-shadow: none; outline: none; font-family: inherit; font-size: 1rem; color: #334155; height: 100%;" placeholder="Enter password" tabindex="2" id="username_password" name="username_password" value='{$LOGIN_PASSWORD}' autocomplete="off">
                            <span style="padding-right: 1rem; display: flex; align-items: center;">
                                <a href="javascript:void(0)" title="Toggle password visibility" onclick="var input = document.getElementById('username_password'); input.type = (input.type === 'password') ? 'text' : 'password';" style="color: #64748b; display: flex; text-decoration: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /><path d="M3 3l18 18" /></svg>
                                </a>
                            </span>
                        </div>
                    </div>

                    {if !empty($SELECT_LANGUAGE)}
                    <div style="margin-bottom: 1.5rem; text-align: left;">
                        <label style="display: block; font-weight: 500; color: #334155; font-size: 0.95rem; margin-bottom: 0.5rem; font-family: inherit;">{sugar_translate module="Users" label="LBL_LANGUAGE"}</label>
                        <select name='login_language' style="display: block; width: 100%; height: 48px; box-sizing: border-box; padding: 0 1rem; border-radius: 8px; border: 1px solid #e2e8f0; font-family: inherit; font-size: 1rem; color: #334155; background: #fff;" onchange="switchLanguage(this.value)">
                            {$SELECT_LANGUAGE}
                        </select>
                    </div>
                    {/if}

                    <div style="margin-bottom: 1.5rem; text-align: left; display:{$DISPLAY_FORGOT_PASSWORD_FEATURE};">
                        <a href="javascript:void(0)" tabindex="-1" onclick='toggleDisplay("forgot_password_dialog");' style="color: #475569; font-size: 0.9rem; text-decoration: underline; font-family: inherit;">Forget Password?</a>
                    </div>

                    <div style="margin-top: 2rem;">
                        <button type="submit" tabindex="3" name="Login" style="display: block; width: 100%; box-sizing: border-box; background-color: #1e4e83; color: white; font-weight: 600; padding: 0.85rem; border-radius: 8px; font-size: 1.05rem; border: none; box-shadow: 0 4px 6px rgba(30, 78, 131, 0.2); cursor: pointer; font-family: inherit;">Login</button>
                    </div>
                </form>

                <!-- Forgot Password Dialog -->
                <form class="passform" role="form" action="index.php" method="post" name="fp_form" id="fp_form" autocomplete="off" style="margin: 0; padding: 0;">
                    <div id="forgot_password_dialog" style="display:none; margin-top:20px; padding-top:20px; border-top:1px solid #e2e8f0; text-align: left;">
                        <input type="hidden" name="entryPoint" value="GeneratePassword">
                        <div id="generate_success" style="color: #ef4444; font-size: 0.9rem; margin-bottom: 1rem;"></div>

                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; font-weight: 500; color: #334155; font-size: 0.95rem; margin-bottom: 0.5rem; font-family: inherit;">{sugar_translate module="Users" label="LBL_USER_NAME"} *</label>
                            <input type="text" id="fp_user_name" name="fp_user_name" value='{$LOGIN_USER_NAME|escape}' placeholder="{sugar_translate module="Users" label="LBL_USER_NAME"}" autocomplete="off" style="display: block; width: 100%; box-sizing: border-box; padding: 0.75rem 1rem; border-radius: 8px; border: 1px solid #e2e8f0; font-family: inherit; font-size: 1rem; color: #334155;">
                        </div>

                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; font-weight: 500; color: #334155; font-size: 0.95rem; margin-bottom: 0.5rem; font-family: inherit;">{sugar_translate module="Users" label="LBL_EMAIL"} *</label>
                            <input type="text" id="fp_user_mail" name="fp_user_mail" value='' placeholder="{sugar_translate module="Users" label="LBL_EMAIL"}" autocomplete="off" style="display: block; width: 100%; box-sizing: border-box; padding: 0.75rem 1rem; border-radius: 8px; border: 1px solid #e2e8f0; font-family: inherit; font-size: 1rem; color: #334155;">
                        </div>

                        {$CAPTCHA}
                        <div id='wait_pwd_generation' style="margin-bottom: 1rem;"></div>
                        <button type="button" onclick="validateAndSubmit(); return document.getElementById('cant_login').value == ''" id="generate_pwd_button" name="fp_login" style="display: block; width: 100%; box-sizing: border-box; background-color: #1e4e83; color: white; font-weight: 600; padding: 0.85rem; border-radius: 8px; font-size: 1.05rem; border: none; box-shadow: 0 4px 6px rgba(30, 78, 131, 0.2); cursor: pointer; font-family: inherit;">
                            {sugar_translate module="Users" label="LBL_LOGIN_SUBMIT"}
                        </button>
                    </div>
                </form>
                
                <div style="text-align: center; margin-top: 2rem; padding-top: 1rem; font-size: 0.95rem; color: #475569; font-family: inherit;">
                    You don't have an account? <a href="https://badirra.com/" target="_blank" style="color: #1e4e83; font-weight: 600; text-decoration: none;">Sign up</a>
                </div>

            </div>
        </div>
    </div>
</div>

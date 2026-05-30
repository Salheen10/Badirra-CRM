{* <!--
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * Badirra CRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by Badirra CRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by Badirra CRM".
 */

-->
*}


<div class="dashletPanelMenu wizard admin-dashboard">
    <div class="bd">
        <div class="screen admin-panel container-xl px-0 py-3">
            {foreach from=$ADMIN_GROUP_HEADER key=j item=val1}
                <div class="admin-group-section mb-5">
                    <div class="admin-group-header mb-3 pb-2 border-bottom">
                        <div class="d-flex align-items-center">
                            {if isset($GROUP_HEADER[$j][1])}
                                {$GROUP_HEADER[$j][0]}{$GROUP_HEADER[$j][1]}
                            {else}
                                {$GROUP_HEADER[$j][0]}{$GROUP_HEADER[$j][2]}
                            {/if}
                        </div>
                    </div>
                    
                    <div class="row row-cards">
                        {assign var='i' value=0}
                        {foreach from=$VALUES_3_TAB[$j] key=link_idx item=admin_option}
                            {if isset($COLNUM[$j][$i]) && $ITEM_HEADER_LABEL[$j][$i] != ""}
                                <div class="col-sm-6 col-md-6 col-lg-4 d-flex">
                                    <a id='{$ID_TAB[$j][$i]}' href='{$ITEM_URL[$j][$i]}' class="card card-link card-link-pop flex-fill border-0 shadow-sm admin-card">
                                        <div class="card-body d-flex flex-column h-100">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md rounded bg-primary-lt me-3 flex-shrink-0">
                                                    <span class="suitepicon suitepicon-admin-{$ICONS[$j][$i]} fs-2"></span>
                                                </span>
                                                <div class="flex-grow-1">
                                                    <h3 class="card-title text-primary font-weight-bold mb-1">{$ITEM_HEADER_LABEL[$j][$i]}</h3>
                                                    <p class="text-muted small mb-0 admin-desc">{$ITEM_DESCRIPTION[$j][$i]}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            {/if}
                            {assign var='i' value=$i+1}
                        {/foreach}
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</div>



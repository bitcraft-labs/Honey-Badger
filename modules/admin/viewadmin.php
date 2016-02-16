<!--top level tab content-->
<div class="tab-content">
    <!-- site settings -->
    <?php if($myACL->hasPermission('access_admin')) {
        $active_on = 'active'; 
        echo "<div id='site' class='tab-pane $active_on'>";
        echo "<br>";
        include_once 'modules/admin/viewsite.php';
        echo "</div>";
        }?>

    <!-- user list/manage -->
    <div id="access_users" class="tab-pane <?php if(!($myACL->hasPermission('access_admin')) && ($myACL->hasPermission('manage_users'))) echo 'active';?>">
        <br>
        <?php include_once 'modules/admin/viewusers.php'; ?>
    </div>

    <!-- user groups -->
    <div id="access_groups" class="tab-pane">
        <?php include_once 'modules/admin/viewgroups.php'; ?>
    </div>

    <!-- sr list/templates -->
    <div id="sr_types" class="tab-pane <?php if(!($myACL->hasPermission('access_admin')) && (!$myACL->hasPermission('manage_users'))) echo 'active';?>">
        service record types/templates
    </div>

    <!-- sr security, who sees what templates -->
    <div id="sr_security" class="tab-pane">
        service record security
    </div>
</div>

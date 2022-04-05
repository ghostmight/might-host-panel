<?php

/*
 * page manager
 */
$resources = BASE_PATH.'resources/';
$sites = $resources.'sites/';
$auth = $resources.'auth/';
$customer = $resources.'customer/';
$home = $resources.'home/';
$gameserver = $resources.'home/gameserver/';
$team = $resources.'team/';
$suggestion = $resources.'suggestions/';
$page = $helper->protect($_GET['page']);
//Test GG FF HH

if(isset($_GET['page'])) {
    switch ($page) {

        default: include($sites . "404.php");  break;

        case "banned": include($sites . "banned.php"); break;

        case "suggestions": include($suggestion . "index.php"); break;
        case "suggestions_add": include($suggestion . "add.php"); break;

        //auth
        case "auth_login": include($auth . "login.php");  break;
        case "auth_register": include($auth . "register.php"); break;
        case "auth_logout": setcookie('session_token', null, time(),'/'); header('Location: '.$helper->url().'home'); break;
        case "auth_activate": include($auth . "activate.php"); break;
        case "auth_forgot_password": include($auth . "forgot_password.php"); break;

        //index
        case "dashboard": include($customer . "dashboard.php");  break;
        case "profile": include($customer . "profile.php");  break;
        case "404": include($sites . "404.php");  break;
        case "verify": include($customer . "verify.php");  break;

        //homepage
        case "/": include($home . "index.php"); break;
        case "home": include($home . "index.php"); break;
        case "gameserver": include($gameserver . "index.php"); break;

        //accounting
        case "accounting_charge": include($customer . "accounting/charge.php");  break;
        case "accounting_donate": include($customer . "accounting/donate.php");  break;
        case "accounting_transactions": include($customer . "accounting/transactions.php");  break;
        case "accounting_invoice": include($customer . "accounting/invoice.php");  break;

        //paymentmethods
        case "accounting_sepa": include($customer . "accounting/sepa.php");  break;
        case "accounting_banktransfer": include($customer . "accounting/banktransfer.php");  break;
        case "accounting_creditcard": include($customer . "accounting/stripe.php");  break;

        //support
        case "tickets": include($customer . "support/tickets.php");  break;
        case "ticket": include($customer . "support/ticket.php");  break;

        //webspace
        case "order_webspace": include($customer . "webspace/order.php");  break;
        case "manage_webspaces": include($customer . "webspace/index.php");  break;
        case "manage_webspace": include($customer . "webspace/manage.php");  break;
        case "renew_webspace": include($customer . "webspace/renew.php");  break;

        case "order_webspace_resellernld": include($customer . "webspace/order_resellernld.php");  break;
        case "manage_rs_webspaces": include($customer . "webspace/index_rs.php");  break;
        case "manage_rs_webspace": include($customer . "webspace/manage_rs.php");  break;
        case "renew_rs_webspace": include($customer . "webspace/renew_rs.php");  break;

        case "order_nginx": include($customer . "nginx/order.php");  break;
        case "manage_nginxs": include($customer . "nginx/index.php");  break;
        case "manage_nginx": include($customer . "nginx/manage.php");  break;
        case "renew_nginx": include($customer . "nginx/renew.php");  break;

        //hetzner cloud
        case "order_cloudserver": include($customer . "cloudserver/order.php");  break;
        case "manage_cloudserver": include($customer . "cloudserver/index.php");  break;
        case "manage_cloudserver": include($customer . "cloudserver/manage.php");  break;
        case "renew_cloudserver": include($customer . "cloudserver/renew.php");  break;

        //teamspeak
        case "order_teamspeak": include($customer . "teamspeak/order.php");  break;
        case "manage_teamspeaks": include($customer . "teamspeak/index.php");  break;
        case "manage_teamspeak": include($customer . "teamspeak/manage.php");  break;
        case "reconfigure_teamspeak": include($customer . "teamspeak/reconfigure.php");  break;
        case "renew_teamspeak": include($customer . "teamspeak/renew.php");  break;

        //LXC Server
        case "order_vserver": include($customer . "vserver/order.php");  break;
        case "order_vserver_custom": include($customer . "vserver/order_custom.php");  break;
        case "order_vserver_packs": include($customer . "vserver/order_packs.php");  break;
        case "order_vserver_game": include($customer . "vserver/order_game.php");  break;
        case "manage_vservers": include($customer . "vserver/index.php");  break;
        case "manage_vserver": include($customer . "vserver/manage.php");  break;
        case "reconfigure_vserver": include($customer . "vserver/reconfigure.php");  break;
        case "renew_vserver": include($customer . "vserver/renew.php");  break;

        //KVM Rootserver
        case "order_rootserver": include($customer . "rootserver/order.php");  break;
        case "manage_rootservers": include($customer . "rootserver/index.php");  break;
        case "manage_rootserver": include($customer . "rootserver/manage.php");  break;
        case "renew_rootserver": include($customer . "rootserver/renew.php");  break;

        //dedicated
        case "order_dedicated_first": include ($customer . "dedicated/order/first.php"); break;
        case "order_dedicated_second": include ($customer . "dedicated/order/second.php"); break;
        case "manage_dedicated": include ($customer . "dedicated/index.php"); break;
        case "manage_dedi": include ($customer . "dedicated/manage.php"); break;
        case "renew_dedicated": include ($customer . "dedicated/renew.php"); break;

        //gameserver
        case "order_gameserver": include($customer . "gameserver/order.php");  break;
        case "manage_gameservers": include($customer . "gameserver/index.php");  break;
        case "manage_gameserver": include($customer . "gameserver/manage.php");  break;
        case "renew_gameserver": include($customer . "gameserver/renew.php");  break;
        case "reconfigure_gameserver": include($customer . "gameserver/reconfigure.php");  break;

        case "order_minecraft": include($customer . "gameserver/minecraft.php");  break;
        case "order_paper": include($customer . "gameserver/paper.php");  break;
        case "order_sponge": include($customer . "gameserver/sponge.php");  break;
        case "order_ark": include($customer . "gameserver/ark.php");  break;
        case "order_forge": include($customer . "gameserver/minecraft_forge.php");  break;
        case "order_rust": include($customer . "gameserver/rust.php");  break;
        case "order_altv": include($customer . "gameserver/altv.php");  break;
        case "order_pocket": include($customer . "gameserver/minecraft_pocket.php");  break;
        case "order_tf2": include($customer . "gameserver/tf2.php");  break;

        //domains
        case "domain_order": include($customer . "domain/order.php");  break;
        case "manage_domains": include($customer . "domain/index.php");  break;
        case "manage_domain": include($customer . "domain/manage.php");  break;
        case "manage_handles": include($customer . "domain/handles.php"); break;
        case "manage_nameservers": include($customer . "domain/nameservers.php"); break;
        case "renew_domain": include($customer . "domain/renew.php");  break;

        //kvm
        case "order_storage": include($customer . "storage/order.php");  break;
        case "order_storage_pakete": include($customer . "storage/order_pakete.php");  break;
        case "manage_storages": include($customer . "storage/index.php");  break;
        case "manage_storage": include($customer . "storage/manage.php");  break;
        case "renew_storage": include($customer . "storage/renew.php");  break;

        //system
        case "worker_queue": include(BASE_PATH . "app/crone/work_queue.php");  break;
        case "runtime_queue": include(BASE_PATH . "app/crone/runtime_queue.php");  break;
        case "get_load": include(BASE_PATH . "app/ajax/get_load.php");  break;
        case "traffic_queue": include(BASE_PATH . "app/crone/traffic_queue.php");  break;
        case "dsgvo": include($resources . "customer/dsgvo.php");  break;

        //debug
        case "DEBUG": include(BASE_PATH . "DEBUG/index.php");  break;

        //
        case "impressum": include($sites."impressum.php");  break;
        case "datenschutz": include($sites."datenschutz.php");  break;
        case "agb": include($sites."agb.php");  break;
        case "withdrawal": include($sites."withdrawal.php");  break;
        case "trademark": include($sites."trademark.php");  break;

        //api
        case "api_v1_discord": include(BASE_PATH."resources/api/index_discord.php");  break;

        //team
        case "team_tickets": include($team."support/tickets.php");  break;
        case "team_ticket": include($team."support/ticket.php");  break;
        case "team_users": include($team."user/users.php");  break;
        case "team_user": include($team."user/user.php");  break;
        case "team_spin_login": include($team."user/s_pin_login.php");  break;
        case "team_login_back": include($team."login_back.php");  break;
        case "team_transactions": include($team."transactions.php");  break;
        case "team_system": include($team."system.php");  break;
        case "team_ipam": include($team."ip_manager.php");  break;
        case "team_orders": include($team."orders/list.php");  break;
        case "team_order": include($team."orders/manage.php");  break;
        case "team_payments": include($team."payments.php");  break;

        case "team_produkte_webserver_rs": include($team."produkte/webserver-reseller.php");  break;

    }

    if(strpos($currPage,'system_') !== false || strpos($currPage,'_hidelayout') !== false) {} else {
        include BASE_PATH.'/resources/additional/footer.php';
    }

} else {
    die('please enable .htaccess on your server');
}
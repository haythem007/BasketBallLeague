@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('basic_crm_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>@lang('quickadmin.basic-crm.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('crm_status_access')
                    <li>
                        <a href="{{ route('admin.crm_statuses.index') }}">
                            <i class="fa fa-folder"></i>
                            <span>@lang('quickadmin.crm-statuses.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('crm_customer_access')
                    <li>
                        <a href="{{ route('admin.crm_customers.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span>@lang('quickadmin.crm-customers.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('crm_note_access')
                    <li>
                        <a href="{{ route('admin.crm_notes.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span>@lang('quickadmin.crm-notes.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('crm_document_access')
                    <li>
                        <a href="{{ route('admin.crm_documents.index') }}">
                            <i class="fa fa-file"></i>
                            <span>@lang('quickadmin.crm-documents.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('team_access')
            <li>
                <a href="{{ route('admin.teams.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('quickadmin.teams.title')</span>
                </a>
            </li>@endcan
            
            @can('player_access')
            <li>
                <a href="{{ route('admin.players.index') }}">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.players.title')</span>
                </a>
            </li>@endcan
            
            @can('game_access')
            <li>
                <a href="{{ route('admin.games.index') }}">
                    <i class="fa fa-soccer-ball-o"></i>
                    <span>@lang('quickadmin.games.title')</span>
                </a>
            </li>@endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>


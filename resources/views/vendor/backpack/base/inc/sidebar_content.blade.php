<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li class="treeview">
    <a href="#"><i class="fa fa-smile-o"></i> <span>Demo Entities</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('monster') }}"><i class="fa fa-optin-monster"></i> <span>Monsters</span></a></li>
      <li><a href="{{ backpack_url('icon') }}"><i class="fa fa-font-awesome"></i> <span>Icons</span></a></li>
      <li><a href="{{ backpack_url('product') }}"><i class="fa fa-shopping-cart"></i> <span>Products</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
      <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
      <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>

<li><a href="{{ backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
<li><a href="{{ backpack_url('menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>

<!-- Users, Roles Permissions -->
<li class="treeview">
  <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
    <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
    <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
  </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
      <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
      <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
      <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
    </ul>
</li>
<li><a href='{{ backpack_url('cuisine') }}'><i class='fa fa-tag'></i> <span>Cuisines</span></a></li>
<li><a href='{{ backpack_url('amenity') }}'><i class='fa fa-tag'></i> <span>Amenities</span></a></li>
<li><a href='{{ backpack_url('locality') }}'><i class='fa fa-location-arrow'></i> <span>Localities</span></a></li>
<li><a href='{{ backpack_url('measureunit') }}'><i class='fa fa-location-arrow'></i> <span>Measureunits</span></a></li>
<li><a href='{{ backpack_url('menuitem') }}'><i class='fa fa-location-arrow'></i> <span>Menu Items</span></a></li>
<li><a href='{{ backpack_url('order') }}'><i class='fa fa-location-arrow'></i> <span>Orders</span></a></li>
<li><a href='{{ backpack_url('item') }}'><i class='fa fa-tag'></i> <span>Items</span></a></li>
<li><a href='{{ backpack_url('subitem') }}'><i class='fa fa-subitem'></i> <span>Sub Items</span></a></li>
<li><a href='{{ backpack_url('menu') }}'><i class='fa fa-menu'></i> <span>Menu</span></a></li>
<li><a href='{{ backpack_url('orderitem') }}'><i class='fa fa-orderitem'></i> <span>Order Items</span></a></li>
<li><a href='{{ backpack_url('restaurant') }}'><i class='fa fa-restaturant'></i> <span>Restaurants</span></a></li>

<li><a href='{{ backpack_url('city') }}'><i class='fa fa-building'></i> <span>City</span></a></li>
<li><a href='{{ backpack_url('state') }}'><i class='fa fa-building'></i> <span>State</span></a></li>
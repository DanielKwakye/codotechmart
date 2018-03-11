   <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">   
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
           <li class=" nav-item"><a href="{{url('/administration/dashboard')}}"><i class="icon-support"></i><span data-i18n="nav.support_raise_support.main" class="menu-title">Home</span></a>
          </li>
             <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.orders.main" class="menu-title">Orders</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.product.allproducts" class="menu-item">Orders</a>
              </li>
              <li><a href="#" data-i18n="nav.product.addnew" class="menu-item">Invoice</a>
              </li>
              <li><a href="#" data-i18n="nav.product.categories" class="menu-item">Preference</a>
              </li>
            </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="icon-server2"></i><span data-i18n="nav.product.main" class="menu-title">Products</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/administration/productlist')}}" data-i18n="nav.product.allproducts" class="menu-item">All products</a>
              </li>
              <li><a href="{{url('/administration/addproduct')}}" data-i18n="nav.product.addnew" class="menu-item">Add New</a>
              </li>
              <li><a href="{{url('/administration/category')}}" data-i18n="nav.product.categories" class="menu-item">Categories</a>
              </li>
              <li><a href="{{url('/administration/tags')}}" data-i18n="nav.product.tags" class="menu-item">Tags</a>
              </li>
              <li><a href="{{url('/administration/attributes')}}" data-i18n="nav.product.attributes" class="menu-item">Attribute & Features</a>
              </li>
              <li><a href="{{url('/administration/brand')}}" data-i18n="nav.product.brands" class="menu-item">Brand & Suppliers</a>
              </li>
             {{--  <li><a href="dashboard-fitness.html" data-i18n="nav.product.stock" class="menu-item">Stock</a>
              </li> --}}
            </ul>
          </li>
             <li class=" nav-item"><a href="index.html"><i class="icon-grid2"></i><span data-i18n="nav.branches.main" class="menu-title">Branches</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/administration/branches')}}" data-i18n="nav.branches.all" class="menu-item">All Branches</a>
              </li>
              <li><a href="{{url('/administration/addnewbranch')}}" data-i18n="nav.branches.new" class="menu-item">Add New</a>
              </li>
              {{-- <li><a href="dashboard-analytics.html" data-i18n="nav.branches.preferences" class="menu-item">Preferences</a>
              </li> --}}
            </ul>
          </li>
             {{--   <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.tools.main" class="menu-title">Tools</span></a>
            <ul class="menu-content">
              <li><a href="dashboard-ecommerce.html" data-i18n="nav.tools.import" class="menu-item">Import</a>
              </li>
              <li><a href="dashboard-project.html" data-i18n="nav.tools.export" class="menu-item">Export</a>
              </li>     
            </ul>
          </li> --}}
               <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.report.main" class="menu-title">Reports</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.report.stats" class="menu-item">Stats</a>
              </li>
              <li><a href="#" data-i18n="nav.report.monitor" class="menu-item">Monitoring</a>
              </li>
              <li><a href="#" data-i18n="nav.report.export" class="menu-item">Charts & Graphs</a>
              </li>     
            </ul>
          </li>
           <li class=" nav-item"><a href="{{url('/administration/paymentmethod')}}"><i class="icon-support"></i><span data-i18n="nav.payment.main" class="menu-title">Payment</span></a>
          </li>
          
          <li class=" nav-item"><a href="#"><i class="icon-support"></i><span data-i18n="nav.shipping.main" class="menu-title">Shipping</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-support"></i><span data-i18n="nav.adverts.main" class="menu-title">Advertisements</span></a>
          </li>
            <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.accounts.main" class="menu-title">Accounts</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.accounts.allusers" class="menu-item">All Users</a>
              </li>
              <li><a href="#" data-i18n="nav.accounts.addnew" class="menu-item">Add New</a>
              </li> 
              <li><a href="#" data-i18n="nav.accounts.profile" class="menu-item">Your Profile</a>
              </li> 
              <li><a href="#" data-i18n="nav.accounts.permissions" class="menu-item">Permissions</a>
              </li>     
            </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="icon-home3"></i><span data-i18n="nav.customers.main" class="menu-title">Customers</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/administration/customers')}}" data-i18n="nav.customers.allcustomers" class="menu-item">All Customers</a>
              </li>
             {{--  <li><a href="#" data-i18n="nav.customers.reviews" class="menu-item">Reviews</a>
              </li> 
              <li><a href="#" data-i18n="nav.customers.messsages" class="menu-item">Messages</a>
              </li> --}}
               <li><a href="{{url('/administration/livechatscript')}}" data-i18n="nav.customers.chats" class="menu-item">Live Chats</a>
              </li>      
            </ul>
          </li>

           <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.settings.main" class="menu-title">Settings</span></a>
            <ul class="menu-content">
              <li><a href="{{url('/administration/generalsettings')}}" data-i18n="nav.settings.general" class="menu-item">General</a>
              </li> 
              <li><a href="{{url('/administration/emailsettings')}}" data-i18n="nav.settings.mails" class="menu-item">Mails</a>
              </li> 
              <li><a href="{{url('/administration/smssettings')}}" data-i18n="nav.settings.sms" class="menu-item">SMS</a>
              </li> 
              <li><a href="#" data-i18n="nav.settings.mails" class="menu-item">Appearance</a>
              </li>   
            </ul>
          </li>
        </ul>
      </div>

          <div class="main-menu-footer footer-close">
        <div class="header text-xs-center"><a href="#" class="col-xs-12 footer-toggle"><i class="icon-ios-arrow-up"></i></a></div>
        <div class="content">
          <div class="actions"><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Settings"><span aria-hidden="true" class="icon-cog3"></span></a><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock"><span aria-hidden="true" class="icon-lock4"></span></a><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout"><span aria-hidden="true" class="icon-power3"></span></a></div>
        </div>
      </div>
</div>
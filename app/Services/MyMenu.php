<?php

namespace App\Services;

use Pratiksh\Adminetic\Contracts\SidebarInterface;
use Pratiksh\Adminetic\Traits\SidebarHelper;

class MyMenu implements SidebarInterface
{
    use SidebarHelper;

    public function myMenu(): array
    {
        return [
            [
                'type' => 'breaker',
                'name' => 'General',
                'description' => 'Administration Control',

            

],[
'type' => 'menu',
'name' => 'Team',
'icon' => 'fa fa-wrench',
'is_active' => request()->routeIs('team*') ? 'active' : '',
'conditions' => [
[
'type' => 'or',
'condition' => auth()->user()->can('view-any', \App\Models\Admin\Team::class),
],
[
'type' => 'or',
'condition' => auth()->user()->can('create', \App\Models\Admin\Team::class),
],
],
"children" => $this->indexCreateChildren("team", \App\Models\Admin\Team::class),

],[
'type' => 'menu',
'name' => 'Step',
'icon' => 'fa fa-wrench',
'is_active' => request()->routeIs('step*') ? 'active' : '',
'conditions' => [
[
'type' => 'or',
'condition' => auth()->user()->can('view-any', \App\Models\Admin\Step::class),
],
[
'type' => 'or',
'condition' => auth()->user()->can('create', \App\Models\Admin\Step::class),
],
],
"children" => $this->indexCreateChildren("step", \App\Models\Admin\Step::class),

], [
                'type' => 'menu',
                'name' => 'University',
                'icon' => 'fa fa-wrench',
                'is_active' => request()->routeIs('university*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\University::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\University::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('university', \App\Models\Admin\University::class),

            ], [
                'type' => 'menu',
                'name' => 'Candidate',
                'icon' => 'fa fa-wrench',
                'is_active' => request()->routeIs('candidate*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Candidate::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Candidate::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('candidate', \App\Models\Admin\Candidate::class),

            ], [
                'type' => 'menu',
                'name' => 'Test',
                'icon' => 'fa fa-wrench',
                'is_active' => request()->routeIs('test*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Test::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Test::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('test', \App\Models\Admin\Test::class),

            ],
            [
                'type' => 'link',
                'name' => 'Dashboard',
                'icon' => 'fa fa-home',
                'link' => route('dashboard'),
                'is_active' => request()->routeIs('home') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'and',
                        'condition' => auth()->user()->hasRole('admin'),
                    ],
                ],
            ],
            [
                'type' => 'menu',
                'name' => 'User Management',
                'icon' => 'fa fa-users',
                'is_active' => request()->routeIs('user*') ? 'active' : '',
                'pill' => [
                    'class' => 'badge badge-info badge-air-info',
                    'value' => \App\Models\User::count(),
                ],
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\User::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\User::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('user', \App\Models\User::class),
            ],
            [
                'type' => 'menu',
                'name' => 'Role',
                'icon' => 'fa fa-user-tie',
                'is_active' => request()->routeIs('role*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \Pratiksh\Adminetic\Models\Admin\Role::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \Pratiksh\Adminetic\Models\Admin\Role::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('role', \Pratiksh\Adminetic\Models\Admin\Role::class),
            ],
            [
                'type' => 'menu',
                'name' => 'Permission',
                'icon' => 'fa fa-check',
                'is_active' => request()->routeIs('permission*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \Pratiksh\Adminetic\Models\Admin\Permission::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \Pratiksh\Adminetic\Models\Admin\Permission::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('permission', \Pratiksh\Adminetic\Models\Admin\Permission::class),
            ],
            [
                'type' => 'link',
                'name' => 'Setting',
                'icon' => 'fa fa-cog',
                'link' => adminRedirectRoute('setting'),
                'is_active' => request()->routeIs('home') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \Pratiksh\Adminetic\Models\Admin\Setting::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \Pratiksh\Adminetic\Models\Admin\Setting::class),
                    ],
                ],
            ],
            [
                'type' => 'link',
                'name' => 'Banner Management',
                'icon' => 'fa fa-cog',
                'link' => route('admin.widgets.banner_management'),
                'is_active' => request()->routeIs('home') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->hasRole('admin'),
                    ],
                ],
            ],
            [
                'type' => 'link',
                'name' => 'Contact Management',
                'icon' => 'fa fa-cog',
                'link' => route('admin.widgets.contact_management'),
                'is_active' => request()->routeIs('home') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->hasRole('admin'),
                    ],
                ],
            ],
            [
                'type' => 'menu',
                'name' => 'Preference',
                'icon' => 'fa fa-wrench',
                'is_active' => request()->routeIs('preference*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \Pratiksh\Adminetic\Models\Admin\Preference::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \Pratiksh\Adminetic\Models\Admin\Preference::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('preference', \Pratiksh\Adminetic\Models\Admin\Preference::class),
            ],
            [
                'type' => 'link',
                'name' => 'Activities',
                'icon' => 'fa fa-book',
                'is_active' => request()->routeIs('activities*') ? 'active' : '',
                'link' => adminRedirectRoute('activities'),
                'conditions' => [
                    [
                        'type' => 'and',
                        'condition' => auth()->user()->hasRole('admin'),
                    ],
                ],
            ],
            [
                'type' => 'breaker',
                'name' => 'Consultancy',
                'description' => 'Website Module',
            ],
            [
                'type' => 'menu',
                'name' => 'Visa',
                'icon' => 'fa fa-wrench',
                'is_active' => request()->routeIs('visa*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Visa::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Visa::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('visa', \App\Models\Admin\Visa::class),

            ], [
                'type' => 'menu',
                'name' => 'Course',
                'icon' => 'fa fa-wrench',
                'is_active' => request()->routeIs('course*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Course::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Course::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('course', \App\Models\Admin\Course::class),

            ], [
                'type' => 'menu',
                'name' => 'Country',
                'icon' => 'fa fa-wrench',
                'is_active' => request()->routeIs('country*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Country::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Country::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('country', \App\Models\Admin\Country::class),

            ],
            [
                'type' => 'menu',
                'name' => 'Category',
                'icon' => 'fa fa-code-branch',
                'is_active' => request()->routeIs('category*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Category::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Category::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('category', \App\Models\Admin\Category::class),

            ],
            [
                'type' => 'menu',
                'name' => 'Counter',
                'icon' => 'fa fa-chart-line',
                'is_active' => request()->routeIs('counter*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Counter::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Counter::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('counter', \App\Models\Admin\Counter::class),

            ],
            [
                'type' => 'menu',
                'name' => 'Association',
                'icon' => 'fa fa-handshake',
                'is_active' => request()->routeIs('association*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Association::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Association::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('association', \App\Models\Admin\Association::class),

            ], [
                'type' => 'menu',
                'name' => 'Partner',
                'icon' => 'fa fa-male',
                'is_active' => request()->routeIs('partner*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Partner::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Partner::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('partner', \App\Models\Admin\Partner::class),

            ],
            [
                'type' => 'menu',
                'name' => 'Testimonial',
                'icon' => 'fa fa-user-check',
                'is_active' => request()->routeIs('testimonial*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Testimonial::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Testimonial::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('testimonial', \App\Models\Admin\Testimonial::class),

            ], [
                'type' => 'menu',
                'name' => 'Page',
                'icon' => 'far fa-file',
                'is_active' => request()->routeIs('page*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Page::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Page::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('page', \App\Models\Admin\Page::class),
            ],
            [
                'type' => 'menu',
                'name' => 'Gallery',
                'icon' => 'fa fa-file-image',
                'is_active' => request()->routeIs('gallery*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Gallery::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Gallery::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('gallery', \App\Models\Admin\Gallery::class),

            ],  [
                'type' => 'menu',
                'name' => 'Faq',
                'icon' => 'fa fa-question',
                'is_active' => request()->routeIs('faq*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Faq::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Faq::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('faq', \App\Models\Admin\Faq::class),

            ], [
                'type' => 'menu',
                'name' => 'Facility',
                'icon' => 'fa fa-seedling',
                'is_active' => request()->routeIs('facility*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Facility::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Facility::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('facility', \App\Models\Admin\Facility::class),

            ], [
                'type' => 'menu',
                'name' => 'Service',
                'icon' => 'fa fa-hard-hat',
                'is_active' => request()->routeIs('service*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Service::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Service::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('service', \App\Models\Admin\Service::class),

            ],
            [
                'type' => 'menu',
                'name' => 'Popup',
                'icon' => 'fab fa-cloudsmith',
                'is_active' => request()->routeIs('popup*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Popup::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Popup::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('popup', \App\Models\Admin\Popup::class),

            ],
            [
                'type' => 'menu',
                'name' => 'Post',
                'icon' => 'fa fa-blog',
                'is_active' => request()->routeIs('post*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Post::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Post::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('post', \App\Models\Admin\Post::class),
            ],
            [
                'type' => 'menu',
                'name' => 'Slider',
                'icon' => 'fa fa-sliders-h',
                'is_active' => request()->routeIs('slider*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Admin\Slider::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Admin\Slider::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('slider', \App\Models\Admin\Slider::class),

            ],
            [
                'type' => 'breaker',
                'name' => 'DEV TOOLS',
                'description' => 'Development Environment',
            ],
            [
                'type' => 'menu',
                'name' => 'Builder',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => env('APP_ENV') == 'local',
                    ],
                ],
                'children' => [
                    [
                        'type' => 'submenu',
                        'name' => 'Form Builder 1',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/form-builder-1.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Form Builder 2',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/form-builder-2.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Page Builder',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/pagebuild.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Buttom Builder',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/button-builder.html',
                    ],
                ],
            ],
            [
                'type' => 'menu',
                'name' => 'Documentation',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => env('APP_ENV') == 'local',
                    ],
                ],
                'children' => [
                    [
                        'type' => 'submenu',
                        'name' => 'Frontend Docs',
                        'link' => 'https://docs.pixelstrap.com/cuba/all_in_one/document/index.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Adminetic Docs',
                        'link' => 'https://pratikdai404.gitbook.io/adminetic/',
                    ],
                ],
            ],
            [
                'type' => 'link',
                'name' => 'Github',
                'icon' => 'fab fa-github',
                'link' => 'https://github.com/pratiksh404/adminetic',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => env('APP_ENV') == 'local',
                    ],
                ],
            ],
            [
                'type' => 'link',
                'name' => 'Font Awesome',
                'icon' => 'fa fa-font',
                'link' => route('fontawesome'),
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => env('APP_ENV') == 'local',
                    ],
                ],
            ],
        ];
    }
}

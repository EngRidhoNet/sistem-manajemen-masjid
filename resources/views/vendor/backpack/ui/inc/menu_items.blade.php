{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Masjids" icon="la la-question" :link="backpack_url('masjid')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Penguruses" icon="la la-question" :link="backpack_url('pengurus')" />
<x-backpack::menu-item title="Keuangans" icon="la la-question" :link="backpack_url('keuangan')" />
<x-backpack::menu-item title="Kegiatans" icon="la la-question" :link="backpack_url('kegiatan')" />
<x-backpack::menu-item title="Donaturs" icon="la la-question" :link="backpack_url('donatur')" />
<x-backpack::menu-item title="Donasis" icon="la la-question" :link="backpack_url('donasi')" />
@extends('BackEnd.Dashboard.layouts.IndexDashboard')

@section('container-dashboard')
{{-- <h1>{{ $Berita->artis->implode('nama_artis') }}</h1> --}}
{{-- @if($Berita->count()) --}}
<a  href="/Dashboard/Createnews" class="btn btn-primary mb-3">Create Project</a>

@foreach ($Berita as $berita)

<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
          <th scope="col">Nama berita</th>
          <th scope="col">Nama Artis </th>
          <th scope="col">Tanggal Pembuatan</th>
          <th scope="col"></th>
          <th scope="col" >action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $berita->judul_berita }}</td>
          <td>{{ $berita->artis->nama_artis }}</td>

          <td>{{ $berita->created_at }}</td>
          <td>
            <a href="/dashboard/post/show/{{ $berita->judul_berita}}">
            <button class="btn-delete d-inline">
                <span class="icon-wrapper bg-color-green">

                  <svg width="30px" height="40px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M917.251764 802.39026L786.571232 671.643176c-2.964148-2.993841-10.321788 0.260067-18.916281 6.447406l-10.6781-10.6781c54.596637-70.942966 51.407234-171.245844-8.531013-239.190875v-36.821988l0.130034 0.456653c0-70.649111-67.455613-136.867871-103.689891-172.419217l-8.270946-8.204393C529.76441 104.382037 485.22847 95.460924 448.830371 95.460924l-12.371606-0.063481H150.778377c-16.995473 0-47.336266 12.89174-47.336267 38.675221v756.025661c0 21.3562 17.31902 38.741773 38.675221 38.741773h567.587758c21.3562 0 38.741773-17.385573 38.741773-38.741773V753.360488c37.278641 37.308333 108.900443 108.934231 108.900443 108.934231 12.958293 12.89174 72.926232-46.882685 59.904459-59.904459z" fill="#27323A"></path><path d="M707.231382 652.173997c-54.856704 54.890492-144.259299 54.957045-199.149791 0-54.887421-54.953973-54.887421-144.352473 0-199.242965 26.566753-26.566753 61.924584-41.151999 99.559537-41.151999 37.698434 0 73.022477 14.585246 99.58923 41.151999 54.891516 54.953973 54.891516 144.288992 0.001024 199.242965z" fill="#FFFFFF"></path><path d="M603.214872 244.570368l8.657974 8.527941c15.171933 14.848385 36.464652 35.944518 54.53418 59.447806-35.521654-13.28184-75.11018-15.8221-110.333882-17.252468-1.10682-23.442878-5.600653-71.299278-21.486234-112.841378 18.683859 14.651799 41.14688 34.57456 68.627962 62.118099z" fill="#79CCBF"></path><path d="M150.648343 881.633865V142.800262c0.130033-0.066553 0.650167-0.263139 0.650168-0.263138h285.03022l12.371607 0.066552c6.25082 0 14.518694 0.130033 26.436719 4.100661l5.990753 6.25082c32.36092 31.970819 44.015806 111.604524 44.015806 157.377318 0 8.400979 6.64092 15.368519 15.10538 15.692066l6.510887 0.263139c48.899739 1.887021 109.844465 4.230694 146.863039 37.764986l3.383941 3.383941c2.377462 7.487673 3.940935 14.911866 4.201002 22.269506-72.045691-41.412066-165.287856-32.100853-226.853057 29.497112-73.642952 73.642952-73.642952 193.058697 0 266.70165 61.597965 61.594893 154.84013 70.972659 226.886845 29.49404v166.23495H150.648343z" fill="#F4CE73"></path></g></svg>
                </span>
              </button>
             </a>

        </td>
          <td>

            <a href="/dashboard/post/{{$berita->id }}/edit">
              <button class="btn-delete d-inline">
                <span class="icon-wrapper bg-color-yellow">

                  <svg class="icon-edit " width="25px" height="34px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>edit [#1479]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -400.000000)" fill="#000005"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M61.9,258.010643 L45.1,258.010643 L45.1,242.095788 L53.5,242.095788 L53.5,240.106431 L43,240.106431 L43,260 L64,260 L64,250.053215 L61.9,250.053215 L61.9,258.010643 Z M49.3,249.949769 L59.63095,240 L64,244.114985 L53.3341,254.031929 L49.3,254.031929 L49.3,249.949769 Z" id="edit-[#1479]"> </path> </g> </g> </g> </g></svg>
                </span>
              </button>
            </a>


        </td>
          <td>
            <form action="/Dashboard/{{ $berita->id}}" method="post" class="d-inline">
              @csrf

              @method('delete')
            <button class="btn-delete d-inline" onclick="return  confirm('Are You Sure, for delete this berita?')">
                <span class="icon-wrapper">
                  <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </span>
              </button>
              </form>

        </td>
         </tr>


      </tbody>
    </table>
  </div>

@endforeach
{{-- @else
<div>
<h1>berita kosong</h1>
</div>

@endif --}}

@endsection
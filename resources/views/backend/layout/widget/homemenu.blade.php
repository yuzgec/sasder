
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Pages->count()}}]</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('page.index')}}" title="Sayfa Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Sayfa Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="7" width="18" height="13" rx="2" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /><line x1="12" y1="12" x2="12" y2="12.01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Project }}] Kongre</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('project.index')}}" title="Proje Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Kongre Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Team }}] Yönetim Kurulu</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('team.index')}}" title="Proje Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Yönetim Kurulu Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-2">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body p-2 text-center ">
                        <div class="demo-icon-preview">
                            <div data-icon-preview-icon="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3" /></svg>
                            </div>
                        </div>
                        <div class="text-h3 m-0 font-weight-bold">[{{ $Event }}] Etkinlik</div>
                        <div class="text-muted mb-3">
                            <a href="{{route('event.index')}}" title="Proje Yönetimi" class="btn btn-outline-tabler btn-sm ">
                                Etkinlik Yönetimi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-9 mt-2">
        {{--Kullanıcı Sayıları--}}
        <div class="row">
            <div class="col-12 col-lg-4 mb-2">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                            <span class="bg-success text-white avatar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <circle cx="9" cy="7" r="4"></circle>
                                   <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                   <path d="M16 11l2 2l4 -4"></path>
                                </svg>
                            </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $User->where('status' , 1)->count() }} Kullanıcı
                                </div>
                                <div class="text-muted">
                                    Aktif Kullanıcı Sayısı
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                            <span class="bg-warning text-white avatar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-exclamation" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <circle cx="9" cy="7" r="4"></circle>
                                   <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                   <line x1="19" y1="7" x2="19" y2="10"></line>
                                   <line x1="19" y1="14" x2="19" y2="14.01"></line>
                                </svg>
                            </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $User->where('status' , 0)->count() }} Kullanıcı
                                </div>
                                <div class="text-muted">
                                    Onaylanmamış Kullanıcı Sayısı
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-secondary text-white avatar">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                       <circle cx="9" cy="7" r="4"></circle>
                                       <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                       <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                       <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    {{ $User->count() }} Kullanıcı
                                </div>
                                <div class="text-muted">
                                    Toplam Kullanıcı Sayısı
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-status-bottom bg-primary"></div>
                <div class="d-flex justify-content-between">
                    <div class="card-title">Kullanıcı Listesi [{{$User->count()}}]</div>
                    <div>{{ $User->appends(['sort' => 'uyeler'])->links() }}</div>
                </div>

                <table class="table table-hover table-striped table-bordered table-center">
                    <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Kayıt Tarihi</th>
                        <th>Durum</th>
                        <th class="w-1"></th>
                    </tr>
                    </thead>
                    <tbody id="orders">
                    @foreach($User as $item)
                        <tr id="slider_{{$item->id}}">

                            <td>
                                <div class="font-weight-medium">{{ $item->getUser->name.' '.$item->surname }}</div>
                            </td>
                            <td>
                                <div class="font-weight-medium">{{ $item->getUser->phone}}</div>
                            </td>
                            <td>
                                <div class="font-weight-medium">{{ $item->getUser->email}}</div>
                            </td>
                            <td class="d-none d-lg-table-cell">
                                {{ $item->created_at->diffForHumans() }}
                            </td>
                            <td class="text-center">
                                <label class="form-check form-check-single form-switch">
                                    <input class="form-check-input switch" status-id="{{ $item->id }}"  type="checkbox" @if ($item->status == 1) checked @endif>
                                </label>
                            </td>

                            <td>
                                <div class="btn-list flex-nowrap">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top btn-sm" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                            Eylemler
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item justify-content-between" href="{{ route('slider.edit', $item->id) }}" title="Düzenle">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" /><path d="M16 5l3 3" /><path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" /></svg>
                                                Düzenle
                                            </a>
                                            <a data-bs-toggle="modal" data-bs-target="#silmeonayi{{ $item->id }}" class="dropdown-item justify-content-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                Sil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal modal-blur fade" id="silmeonayi{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Silme Onayı</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Silmek üzeresiniz. Bu işlem geri alınmamaktadır.
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
                                            İptal Et
                                        </a>
                                        <form action="{{ route('slider.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm ms-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                Silmek İstiyorum
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
                <span class="mt-3">

                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="card mt-2" style="height: calc(24rem + 10px)">

            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                <h4 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" /><path d="M3 6l9 6l9 -6" /><path d="M15 18h6" /><path d="M18 15l3 3l-3 3" /></svg>
                    İletişim Formu [{{$Form->count()}}]
                    <br>
                    <small style="font-size: 10px" class="badge bg-azure text-capitalize">Okunmamış Mesajlarınız Var</small>
                </h4>
                <div class="divide-y">
                    @foreach($Form as $item)
                    <div>
                        <div class="row">
                            <div class="col">
                                <div class="text-truncate">
                                    <strong>{{ $item->name}}</strong>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-muted"> {{ $item->created_at->diffForHumans() }} -
                                        <span class="badge bg-{{  $item->title ==  'İletişim' ? 'success' : 'warning'}}">{{ $item->title }}</span></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="text-muted">{{ $item->email }}</div>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="badge bg-{{ ($item->read == 1 ) ?  'success' : 'danger' }}"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

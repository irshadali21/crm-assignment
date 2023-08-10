

<td class="nk-tb-col nk-tb-col-tools">
    <ul class="nk-tb-actions gx-1">
        <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                aria-label="Wallet" data-bs-original-title="Wallet"><em class="icon ni ni-wallet-fill"></em></a></li>
        <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                aria-label="Send Email" data-bs-original-title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
        <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                aria-label="Suspend" data-bs-original-title="Suspend"><em class="icon ni ni-user-cross-fill"></em></a></li>
        <li>
            <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em
                        class="icon ni ni-more-h"></em></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <ul class="link-list-opt no-bdr">
                        <li>
                            <a  style="cursor: pointer;" onclick="openModal('show', '{{ route('employees.show', $id) }}')"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                        <li>
                            <a onclick="openModal('edit', '{{ route('employees.edit', $id) }}')" ><em class="icon ni ni-activity-round"></em><span>Edit</span></a></li>
                            <li>
                                <a onclick="openModal('delete', '{{ route('employees.destroy', $id) }}')"><em
                                        class="icon ni ni-na"></em><span>Delete</span></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </td>

<td class="nk-tb-col nk-tb-col-tools">
    <ul class="nk-tb-actions gx-1">

            <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em
                        class="icon ni ni-more-h"></em></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <ul class="link-list-opt no-bdr">
                        <li>
                            <a style="cursor: pointer;" onclick="openModal('show', '{{ route('companies.show', $id) }}')"><em
                                    class="icon ni ni-eye"></em><span>View Details</span></a>
                        </li>
                        <li>
                            <a onclick="openModal('edit', '{{ route('companies.edit', $id) }}')"><em
                                    class="icon ni ni-activity-round"></em><span>Edit</span></a>
                        </li>
                        <li>
                            <a  onclick="confirmDelete('{{ route('companies.destroy', $id) }}')"><em
                                    class="icon ni ni-na"></em><span>Delete</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </li>
    </ul>
</td>

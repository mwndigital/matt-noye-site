<x-admin-layout>
    <div class="pageHero">
        <div class="inner">

        </div>
    </div>
    <div class="pageMain">
        <div class="inner">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="dashboardItem">
                    <h5>Hire me form submissions</h5>
                    <table class="dataTablesTable">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Type of business</th>
                                <th>Project Start Date</th>
                                <th>Project Completion Date</th>
                                <th class="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hireMe as $hm)
                                <tr>
                                    <td>{{ $hm->first_name }}</td>
                                    <td>{{ $hm->last_name }}</td>
                                    <td>{{ $hm->email_address }}</td>
                                    <td>{{ $hm->type_of_business }}</td>
                                    <td>{{ date('d/m/Y', strtotime($hm->project_start_date)) }}</td>
                                    <td>{{ date('d/m/Y', strtotime($hm->project_complete_date)) }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

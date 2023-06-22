<div>

    @include('livewire.admin.skill.modal-form')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Skills List
                        <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                            data-bs-target="#AddskillModal">
                            Add Skills</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stiped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($skills as $skill)

                        <tr>
                            <td>{{ $skill->id}}</td>
                            <td>{{ $skill->skill}}</td>
                            <td>{{ $skill->status == '1' ? 'Hidden' : 'Visible' }}</td>
                            <td>
                                <a href="#" wire:click="editSkill({{ $skill->id}})"data-bs-toggle="modal"
                                data-bs-target="#UpdateskillModal"
                                    class="btn btn-success">Edit</a>
                                    <a href="#" wire:click="deleteSkill({{$skill->id}})"data-bs-toggle="modal" data-bs-target="#deleteSkillModal"
                                        class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Skills Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>{{ $skills->links()}}</div>
            </div>

        </div>

    </div>
</div>
</div>

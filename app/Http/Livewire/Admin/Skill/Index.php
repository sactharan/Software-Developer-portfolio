<?php

namespace App\Http\Livewire\Admin\Skill;

use Livewire\Component;
use App\Models\SkillSetting;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $skills = SkillSetting::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.skill.index',['skills' => $skills])
            ->extends('layouts.admin')
            ->section('content');
    }
    public $skill, $status, $skill_id;

    public function storeSkill()
    {
        $validatedData = $this->validate();
        SkillSetting::create([
            'skill' => $this->skill,
            'status' => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Skill Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function editSkill(int $skill_id)
    {
        $this->skill_id = $skill_id;
        $skill = SkillSetting::findOrFail($skill_id);
        $this->skill = $skill->skill;
        $this->status = $skill->status;
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function OpenModal()
    {
        $this->resetInput();
    }

    public function rules()
    {
        return [
            'skill' => 'required|string',
            'status' => 'nullable',
        ];
    }

    public function resetInput()
    {
        $this->skill = NULL;
        $this->status = NULL;
        $this->skill_id = NULL;
    }

    public function updateSkill()
    {

        $validatedData = $this->validate();
        SkillSetting::findOrFail($this->skill_id)->update([
            'skill' => $this->skill,
            'status' => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Skill Updated Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteSkill($skill_id)
    {
        // dd($category_id);
        $this->skill_id = $skill_id;

    }

    public function destroySkill()
    {
        $skill = SkillSetting::find($this->skill_id);
        $skill->delete();
        session()->flash('message','Skill Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }
}

<?php
namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {
    public function index() {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function show($id) {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $course = Course::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'instructor_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Curso creado exitosamente.');
    }

    public function update(Request $request, $id) {
        $course = Course::findOrFail($id);
        $course->update($request->only('title', 'description'));
        return redirect()->back()->with('success', 'Curso actualizado.');
    }

    public function destroy($id) {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('success', 'Curso eliminado.');
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('category')->get();
        return view('movies.index', ['movies' => $movies]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('movies.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required|integer',
            'studio' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Movie::create($request->all());

        return redirect('/movies');
    }

    
    public function showMoviesByGenre($genre)
    {
        // Obtener películas por género desde el modelo Movie
        $category = Category::where('name', $genre)->first();
        
        if (!$category) {
            abort(404); // Manejar caso de categoría no encontrada
        }
    
        $movies = Movie::where('category_id', $category->id)->get();
    
        // Devolver la vista con las películas obtenidas
        return view('movies.genre', compact('genre', 'movies'));
    }
    

}

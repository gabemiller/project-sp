<?php

namespace Site;

use Divide\CMS\Document;
use Divide\CMS\DocumentCategory;
use View;

class NewsController extends \BaseController
{

    protected $layout = '_frontend.master';

    /**
     * Display a listing of the resource.
     * GET /site/news
     *
     * @return Response
     */
    public function index($category = null)
    {
        View::share('title', 'Szent Péteri Levelek');

        $documentCategory = DocumentCategory::where('slug','szent-peteri-levelek')->first();
        $documentList = Document::whereHas('categories',function ($query) use ($documentCategory){
            $query->where('documentcategory_id','=',$documentCategory->id);
        })->orderBy('created_at','desc')->paginate(10);

        $this->layout->content = View::make('site.news.index')
            ->with('documents', $documentList);
    }

}

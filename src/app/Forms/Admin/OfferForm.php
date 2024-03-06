<?php


namespace App\Forms\Admin;


use App\Helpers\Form;
use App\Models\Article;
use App\Models\BaseModel;
use App\Models\Offer;
use App\Models\OfferCategory;
use App\Models\Page;
use App\Models\PageType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class OfferForm extends Form
{

    const FIELDS = [
        'offer_category_id' => [
            'name' => 'offer_category_id',
            'type' => 'select',
            'label' => 'admin.offer_category.singular',
            'rules' => [],
            'options' => [],
        ],
        'title' => [
            'name' => 'title',
            'type' => 'text',
            'label' => 'admin.offer.title',
            'rules' => ['max:255', 'min:2', 'required'],
            'attrs' => [
                'seoUrl' => true,
                'seoTitle' => true,
            ]
        ],
        'text' => [
            'name' => 'text',
            'type' => 'textarea',
            'label' => 'admin.offer.text',
            'class' => 'ckeditorStandard',
            'rules' => [],
            'options' => [],
        ],
        'active' => [
            'name' => 'active',
            'type' => 'checkbox',
            'label' => 'admin.active',
            'rules' => [],
            'options' => [],
        ],
        'price_min' => [
            'name' => 'price_min',
            'type' => 'text',
            'label' => 'admin.offer.price_min',
            'rules' => [],
        ],
        'price_min_label_active' => [
            'name' => 'price_min_label_active',
            'type' => 'checkbox',
            'label' => 'admin.offer.price_min_label_active',
            'rules' => [],
            'options' => [],
        ],
        'price_average' => [
            'name' => 'price_average',
            'type' => 'text',
            'label' => 'admin.offer.price_average',
            'rules' => [],
        ],
        'price_average_label_active' => [
            'name' => 'price_average_label_active',
            'type' => 'checkbox',
            'label' => 'admin.offer.price_average_label_active',
            'rules' => [],
            'options' => [],
        ],
        'price_max' => [
            'name' => 'price_max',
            'type' => 'text',
            'label' => 'admin.offer.offer.price_max',
            'rules' => [],
        ],
        'price_max_label_active' => [
            'name' => 'price_max_label_active',
            'type' => 'checkbox',
            'label' => 'admin.offer.price_max_label_active',
            'rules' => [],
            'options' => [],
        ],
    ];

    public function __construct($model = null)
    {
        foreach (self::FIELDS as $name => $field) {
            $this->modelFields[$name] = $field;
        }

        $categories = OfferCategory::with([])->adminLocale()->get();
        foreach ($categories as $category) {
            $this->modelFields['offer_category_id']['options'][$category->id] = $category->title;
        }

        parent::__construct($model, Offer::class);
    }
}

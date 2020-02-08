<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{

    use Illuminate\Database\Eloquent\Collection;

    /**
 * App\Models\Category
 *
 * @property int $id
 * @property int|null $parent
 * @property int|null $sort
 * @property string|null $route
 * @property-read \App\Models\Translations\Category $translation
 * @property-read Collection|\App\Models\Translations\Category[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model withTranslation()
 */
	class Model extends \Eloquent {}
}


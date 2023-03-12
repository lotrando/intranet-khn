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
/**
 * App\Models\Addon
 *
 * @property int $id
 * @property int $document_id
 * @property int $category_id
 * @property int $position
 * @property string $description
 * @property string $revision
 * @property string $file
 * @property string $status
 * @property int|null $onscreen
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Document|null $document
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereOnscreen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereUserId($value)
 */
	class Addon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Adversevent
 *
 * @property int $id
 * @property string $department_id
 * @property string $misto
 * @property string $datum_cas
 * @property string $cas
 * @property string $spec_druh
 * @property string|null $jinydoplnek
 * @property string $pracovnik
 * @property string|null $svedek
 * @property string|null $pacient
 * @property string|null $datumnaroz
 * @property string|null $chorobopis
 * @property string $udalost
 * @property string|null $reseni
 * @property string|null $opatreni
 * @property string|null $informovan
 * @property string|null $pricina
 * @property string|null $jina_pricina
 * @property string|null $stav_pacienta
 * @property string|null $lokalizace
 * @property string|null $druh_zraneni
 * @property string|null $preventivni_opatreni
 * @property string|null $zhodnoceni_stavu
 * @property string|null $datum
 * @property string|null $jmeno_lekare
 * @property string|null $vyvoj
 * @property string|null $upresneni
 * @property string $status
 * @property string|null $resitel
 * @property string|null $vyjadreni
 * @property string|null $resitel1
 * @property string|null $vyjadreni1
 * @property string|null $resitel2
 * @property string|null $vyjadreni2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Department|null $department
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereCas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereChorobopis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDatumCas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDatumnaroz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereDruhZraneni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereInformovan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereJinaPricina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereJinydoplnek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereJmenoLekare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereLokalizace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereMisto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereOpatreni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePacient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePracovnik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePreventivniOpatreni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent wherePricina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereReseni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereResitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereResitel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereResitel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereSpecDruh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereStavPacienta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereSvedek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereUdalost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereUpresneni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyjadreni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyjadreni1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyjadreni2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereVyvoj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adversevent whereZhodnoceniStavu($value)
 */
	class Adversevent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attendance
 *
 * @property int $id
 * @property int $training_id
 * @property string $personal_number
 * @property string $last_name
 * @property string $first_name
 * @property string|null $start_time
 * @property string|null $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Training|null $training
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereTrainingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 */
	class Attendance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bozp
 *
 * @property int $id
 * @property int $category_id
 * @property string $accordion_name
 * @property int|null $accordion_group
 * @property int $position
 * @property int $document_position
 * @property string $document_name
 * @property string $description
 * @property string|null $processed
 * @property string|null $authorize
 * @property string|null $examine
 * @property string|null $efficiency
 * @property string $revision
 * @property string|null $revision_date
 * @property string|null $next_revision_date
 * @property string|null $tags
 * @property string $file
 * @property string|null $unique_code
 * @property string $status
 * @property int $user_id
 * @property int $onscreen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Addon|null $addon
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereAccordionGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereAccordionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereAuthorize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereDocumentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereDocumentPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereEfficiency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereExamine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereNextRevisionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereOnscreen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereProcessed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereRevisionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bozp whereUserId($value)
 */
	class Bozp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $category_type
 * @property string $category_name
 * @property string $folder_name
 * @property string $category_icon
 * @property string $svg_icon
 * @property string $fas_icon
 * @property string $button
 * @property string $color
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Addon> $addon
 * @property-read int|null $addon_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Document> $documents
 * @property-read int|null $documents_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Navitem> $navitems
 * @property-read int|null $navitems_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereButton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFasIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSvgIcon($value)
 * @mixin \Eloquent
 * @property string $category_file
 * @property string|null $fa_icon
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Addon> $addon
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Document> $documents
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Navitem> $navitems
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFaIcon($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $department_code
 * @property string $center_code
 * @property string $color_id
 * @property string $department_name
 * @property-read \App\Models\Adversevent|null $adversevent
 * @property-read Employee|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCenterCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartmentCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @mixin \Eloquent
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Document
 *
 * @property int $id
 * @property int $category_id
 * @property string $accordion_name
 * @property int|null $accordion_group
 * @property int $position
 * @property string $name
 * @property string $description
 * @property string|null $processed
 * @property string|null $authorize
 * @property string|null $examine
 * @property string|null $efficiency
 * @property string $revision
 * @property string|null $next_revision_date
 * @property string|null $tags
 * @property string|null $revision_date
 * @property string $file
 * @property string|null $unique_code
 * @property string $status
 * @property int $user_id
 * @property int|null $onscreen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Addon> $addons
 * @property-read int|null $addons_count
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAccordionGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAccordionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAuthorize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereEfficiency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereExamine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereNextRevisionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereOnscreen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereProcessed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereRevisionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUserId($value)
 */
	class Document extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $personal_number
 * @property string $image
 * @property string|null $title_preffix
 * @property string $last_name
 * @property string|null $middle_name
 * @property string|null $married_name
 * @property string $first_name
 * @property string|null $title_suffix
 * @property string $department_id
 * @property string $job_id
 * @property string|null $email
 * @property string $start_date
 * @property string|null $end_date
 * @property string|null $comment
 * @property string|null $phone
 * @property string|null $mobile
 * @property string $id_card
 * @property string|null $coffee
 * @property string $employment
 * @property int|null $position
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Department|null $department
 * @property-read Job|null $job
 * @property-read User|null $user
 * @method static \Database\Factories\EmployeeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCoffee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmployment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereIdCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMarriedName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTitlePreffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTitleSuffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $standard_signature
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereStandardSignature($value)
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Evidence
 *
 * @property int $id
 * @property string $evidence_type
 * @property string $evidence_pieces
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence query()
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereEvidencePieces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereEvidenceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Evidence extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Job
 *
 * @property int $id
 * @property string $job_title
 * @property-read \App\Models\Employee|null $employee
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobTitle($value)
 */
	class Job extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Navitem
 *
 * @property int $id
 * @property int $position
 * @property int $category_id
 * @property string $name
 * @property string $subname
 * @property string $alt_name
 * @property string $tooltip
 * @property string $color
 * @property string $page_title
 * @property string $route
 * @property string $favicon
 * @property string $fa_icon
 * @property string $svg_icon
 * @property string $icon_class
 * @property-read Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereAltName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereFaIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereIconClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem wherePageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereSubname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereSvgIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereTooltip($value)
 * @mixin \Eloquent
 */
	class Navitem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Paint
 *
 * @property int $id
 * @property int $department_id
 * @property int $user_id
 * @property string $date_start
 * @property string $date_end
 * @property string|null $rooms
 * @property string|null $doors
 * @property string|null $specials
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Paint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paint query()
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereDoors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereRooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereSpecials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paint whereUserId($value)
 */
	class Paint extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Printer
 *
 * @property int $id
 * @property string $printer_vendor
 * @property string $printer_type
 * @property string $printer_number
 * @property string $toner_id
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePrinterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePrinterType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePrinterVendor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereTonerId($value)
 * @mixin \Eloquent
 */
	class Printer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Slide
 *
 * @property int $id
 * @property int $training_id
 * @property string $slide_title
 * @property string $directory
 * @property string $path
 * @property int $position
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Training|null $training
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereSlideTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereTrainingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Slide extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Toner
 *
 * @property int $id
 * @property string $toner_code
 * @property string $toner_type
 * @property string $toner_size
 * @property int $toner_price
 * @property-read Department|null $department
 * @property-read \App\Models\Printer|null $printer
 * @method static \Illuminate\Database\Eloquent\Builder|Toner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Toner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Toner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerType($value)
 * @mixin \Eloquent
 */
	class Toner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Training
 *
 * @property int $id
 * @property string $title
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Attendance> $attendance
 * @property-read int|null $attendance_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Slide> $slide
 * @property-read int|null $slide_count
 * @method static \Illuminate\Database\Eloquent\Builder|Training newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Training newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Training query()
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attendance> $attendance
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Slide> $slide
 */
	class Training extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $personal_number
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Employee|null $employee
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}


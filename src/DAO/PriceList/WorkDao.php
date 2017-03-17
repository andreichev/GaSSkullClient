<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 03.03.17
 * Time: 7:06
 */

namespace DAO\PriceList;

use Models\PriceList\Work;

interface WorkDao
{
    function save(Work $work);
    function getById($id);
    function getAll();
    function deleteWithId($id);
    function update(Work $work);

    function getArrayBySearch($q);
}
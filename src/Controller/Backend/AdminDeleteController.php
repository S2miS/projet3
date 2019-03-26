<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 03/12/2018
 * Time: 20:01
 */

namespace App\Controller\Backend;

use App\Model\ChapterManager;

class AdminDeleteController
{

    public function delete(int $id)
    {
        $adminDelete = new ChapterManager();
        $result = $adminDelete->deleteChapter($id);

        header('Location: admin-chapitres');
    }
}
<?php

namespace App\Admin\Controllers;

use \App\Models\DaftarWisata;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class DaftarWisataController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'DaftarWisata';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new DaftarWisata());

        $grid->column('id', __('Id'));
        $grid->column('nama_wisata', __('Nama wisata'));
        $grid->column('gambar')->image();
        $grid->column('min_harga', __('Min harga'));
        $grid->column('max_harga', __('Max harga'));
        $grid->column('musim', __('Musim'));
        $grid->column('durasi_malam', __('Durasi malam'));
        $grid->column('penerbangan', __('Penerbangan'));
        $grid->column('termasuk_makan', __('Termasuk Makan'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(DaftarWisata::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama_wisata', __('Nama wisata'));
        $show->field('gambar', __('Gambar'));
        $show->field('min_harga', __('Min harga'));
        $show->field('max_harga', __('Max harga'));
        $show->field('musim', __('Musim'));
        $show->field('durasi_malam', __('Durasi malam'));
        $show->field('penerbangan', __('Penerbangan'));
        $show->field('termasuk_makan', __('Termasuk Makan'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DaftarWisata());

        $form->text('nama_wisata', __('Nama wisata'));
        $form->image('gambar', __('Gambar'));
        $form->number('min_harga', __('Min harga'));
        $form->number('max_harga', __('Max harga'));
        $form->text('musim', __('Musim'));
        $form->number('durasi_malam', __('Durasi malam'));
        $form->switch('penerbangan', __('Penerbangan'));
        $form->switch('termasuk_makan', __('Termasuk Makan'));

        return $form;
    }
}

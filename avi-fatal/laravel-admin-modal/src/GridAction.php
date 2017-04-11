<?php
namespace AviFatal\LaravelAdminModal;

use Illuminate\Contracts\Support\Renderable;

class GridAction implements Renderable {


    private $modal = false;
    private $text;
    private $icon = 'fa-edit';
    private $url;
    private $width = 7;

    public function __toString()
    {
        return $this->render();
    }

    /**
     * @param boolean $modal
     *
     * @return $this
     */
    public function renderAsModal($modal)
    {
        $this->modal = $modal;
        return $this;
    }

    /**
     * @param int
     *
     * @return $this
     */
    public function modalWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param $text
     *
     * @return $this
     */

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function render(){
        $url = $this->url;
        if($this->modal){
            $url = $url."?modal=true";
            $url = "javascript:new LaravelAdminModal().showModal('$url',$this->width)";
        }
        $icon = "<i class='fa $this->icon'></i>";

        $str = "<a href=\"$url\">
                    $icon  $this->text
                </a>";

        return $str;
    }

}

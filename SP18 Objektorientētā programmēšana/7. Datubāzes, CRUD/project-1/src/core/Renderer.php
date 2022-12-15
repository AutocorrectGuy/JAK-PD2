<?php

namespace App\core;

class Renderer {
  const PATH_PAGES = "./views/pages/";
  
  /**
   * renderPage
   * 
   * File should be stored for example like this, `$phpFileName` is `Home`:
   * '/views/pages/Home/Home.php' Folder name should be same as Main page/file name.
   *
   * @param  mixed $phpFileName
   * @return void
   */
  private function renderPage(string $phpFileName): void {
    require_once(self::PATH_PAGES . $phpFileName . '/' . $phpFileName. '.php');
  }

  private function render404(Response &$response):void {
    $response->setStatusCode(404);
    $this->renderPage('_404');
  } 

  public function render(callable|string|array $callback, Response &$response) {
    /**
     * Rendering 404
     */
    if (!$callback) {
      $this->render404($response);
      return;
    }

    /**
     * Rendering regular pages depending on wether input
     * is string or callable
     */
    is_string($callback)
      ? $this->renderPage($callback)
      : (is_array($callback)
        ? call_user_func([new $callback[0], $callback[1]])
        : call_user_func($callback));
  }



}
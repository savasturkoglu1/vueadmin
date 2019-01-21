<?php
/**
 * Created by PhpStorm.
 * User: Savas
 * Date: 18.01.2019
 * Time: 10:21
 */

namespace App\Helpers;


class Components
{
              public static function mesajCard($msj){

                  $renkAraay=['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                      '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                      '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                      '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                      '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                      '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                      '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                      '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                      '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                      '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'];
                  $randomColor = $renkAraay[rand(0,40)];
                  $name = str_split($msj->m_isim)[0];
                  switch ($msj->m_kayit){
                      case 'Transfer': $badge='badge-danger'; break;
                      case 'Rent': $badge='badge-info'; break;
                      case 'Tour': $badge='badge-success'; break;
                      case 'Direckt': $badge='badge-primary'; break;
                      default: $badge='badge-secondary'; break;

                  }
                  if($msj->m_durum == 0){
                      $yeni ='mesaj-yeni';
                  } else {
                      $yeni = '';
                  }

                  return ' <a href="#" class="media border-0 msjLink '.$yeni.'" data-id="'.$msj->id.'" id="rw'.$msj->id.'">
                                            <div class="media-left pr-1">
                                                  <span class="avatar avatar-md">
                                                    <span class="media-object rounded-circle text-circle " style="background-color: '.$randomColor.'">'.$name.'</span>
                                                  </span>
                                            </div>
                                            <div class="media-body w-100">
                                                <h6 class="list-group-item-heading text-bold-500">'.$msj->m_isim.'
                                                    <span class="float-right">

                                            </span>
                                                </h6>

                                                <p class="list-group-item-text mb-0">
                                                    <span class="font-small-2 primary date float-left">'.$msj->created_at.'</span>
                                                <span class="float-right primary">
                                                  <span class="badge '.$badge.' mr-1">'.$msj->m_kayit.'</span>
                                                </span>

                                                </p>

                                            </div>
                                        </a>';
              }

              public static function mesajbody($msj){
                  switch ($msj->m_kayit){
                      case 'Transfer': $badge='badge-danger'; break;
                      case 'Rent': $badge='badge-info'; break;
                      case 'Tour': $badge='badge-success'; break;
                      case 'Direckt': $badge='badge-primary'; break;
                      default: $badge='badge-secondary'; break;

                  }

                  return ' <div class="card-content">
                            <div class="email-app-options card-body"> 
                                <div class="row justify-content-end">

                                    <div class="col-md-6 col-12 text-right">

                                        <div class="btn-group ml-1">
                                            <a class="btn btn-sm btn-success" href="https://wa.me/'.$msj->m_telefon.'" ><i class="la la-whatsapp"></i></a>
                                            <button type="button" class="btn btn-sm btn-outline-warning" href="mailto:'.$msj->m_eposta.'" ><i class="la la-envelope"></i></button>
                                            <button type="button" class="btn btn-sm btn-danger msj-sil" data-id="'.$msj->id.'"><i class="ft-trash-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-app-title card-body">
                                <h3 class="list-group-item-heading">'.$msj->m_isim.'</h3>
                                <small>'.$msj->m_eposta.'</small><br>
                                <small>'.$msj->m_telefon.'</small>
                                <p class="list-group-item-text">
                              <span class="primary">
                                 <span class="badge '.$badge.' mr-1">'.$msj->m_kayit.'</span>
                                 <i class="float-right font-medium-3 ft-star warning"></i>
                              </span>
                                </p>
                            </div>
                            <div class="media-list">
                                    <div class="card-content">
                                        <div class="email-app-text card-body">
                                            <div class="email-app-message">
                                                '.$msj->m_mesaj.'
                                            </div>
                                        </div>

                                </div>

                            </div>
                        </div>';
              }
}
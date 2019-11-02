/*
 * Copyright (C) 2019 Kyle Coots <Kyle Coots @ cooterscomputers.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

var ajaxDone = false;
var ajaxRequest = {
    post: (action, url, data, token)=>{
        if(token == '' || token == undefined || token !== null){
          token = csrf_token_value;
        }

        var dataString = {
            _ss_csrf_token:token,
            action:action,
            data: data
        };

        var headers = {'X-Requested-With': 'XMLHttpRequest'};

        var response = new Promise(function(resolve, reject){
            $.ajax({
                method: "POST",
                async: true,
                url: url,
                data: dataString,
                headers: headers
            }).done(function(data, status, xhr){
                resolve(data, status, xhr);
            }).fail(function(data, status, xhr){
                reject(data, status, xhr);
            });

        });
        console.log(response);
        return response;
    },
    upload: (action, url, data, token)=>{

        if(token == '' || token == undefined || token !== null){
          token = csrf_token_value;
        }

        var dataString = {
            csrf_token:token,
            action:action,
            data: data
        };

        var headers = {'X-Requested-With': 'XMLHttpRequest'};

        var response = new Promise(function(resolve, reject){
            $.ajax({
                method: "POST",
                async: true,
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                data: dataString,
                headers: headers
            }).done(function(data){
                resolve(data);
            }).fail(function(data){
                reject(data);
            });

        });
        return response;
    },
    error: (jqXHR, textStatus, errorThrown)=>{
        // Uncoment below to enable logging
        console.log(jqXHR, textStatus, errorThrown);
    }
};

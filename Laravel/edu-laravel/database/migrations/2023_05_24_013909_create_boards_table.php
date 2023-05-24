<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일만 생성 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate (Migration 클래스의 up 메소드가 실행 => migration 폴더의 하위 파일들의 up메소드가 모두 실행되니 주의)
    // migration 리셋(모든 migration 파일의 down()메소드를 실행) : php artisan migrate:reset    => boards 테이블 자체를 삭제
    // migration 롤백(가장 마지막에 실행한 migration의 내용을 롤백) : php artisan migrate:rollback

    // *migrate 실행하면서 seed 같이 실행 : php artisan migrate --seed

    // 시더 (초기 데이터 생성) : database\seeders의 각 클래스 파일 확인

    // 팩토리 (더미 데이터 생성) : database\factories의 각 클래스 파일 확인(테스트 데이터)
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 삭제일자, 삭제여부, 작성일, 수정일
            $table->id('bno'); // big_int type에 pk, auto_increment
            $table->char('category', 1)->index(); // char(1), not null, index 추가
            $table->string('btitle', 100); // varchar(100), not null
            $table->string('bcontent', 4000); // varchar(4000), not null
            $table->timestamps(); // created_at, updated_at를 생성, null 허용
            $table->timestamp('deleted_at')->nullable(); // 라라벨에서 지원하는 deleted_at 컬럼, null 허용
            $table->char('deleted_flg', 1)->default('0'); // char(1), default '0', not null (속도 : str->enum->int)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};

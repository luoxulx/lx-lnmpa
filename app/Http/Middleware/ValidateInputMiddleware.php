<?php
/**
 * Created by PhpStorm.
 * User: luoxulx
 * Date: 2019/4/11
 * Time: 下午7:31
 */

namespace App\Http\Middleware;


use Closure;
use App\Support\ValidateRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\ValidationHttpException;

class ValidateInputMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $actionName = $this->getActionNameFromRequestUse($request);
        $id = $this->getIdInPath($request);

        $validateRule = new ValidateRule();

        $validator = Validator::make($request->all(), $validateRule->getRule($actionName, $id));

        if ($validator->fails()) {
            $result = [];
            $messages = $validator->errors()->toArray();

            if ($messages) {
                foreach ($messages as $field => $errors) {
                    foreach ($errors as $error) {
                        $result[] = [
                            'field' => $field,
                            'value' => $request->get($field),
                            'code' => $error,
                        ];
                    }
                }
            }

            foreach ($result as $v){
                if (! \is_string($v['value'])) {$v['value'] = json_encode($v['value']);};
                $msg[] = $v['field'].'='.$v['value'].','.$v['code'];
            }
            throw new ValidationHttpException(implode('; ',$msg));
        }
        //存在则进行验证
        return $next($request);

    }
}

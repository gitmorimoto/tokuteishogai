
export function getAge(birthDate, targetDate = new Date()) {

            // 文字列なら Date に変換
            const birth = new Date(birthDate);
            const target = new Date(targetDate);

            let age = target.getFullYear() - birth.getFullYear();

            // 今年の誕生日がまだ来ていない場合
            const hasBirthdayPassed =
                target.getMonth() > birth.getMonth() ||
                (
                    target.getMonth() === birth.getMonth() &&
                    target.getDate() >= birth.getDate()
                );

            if (!hasBirthdayPassed) {
                age--;
            }

            return age;
        
}
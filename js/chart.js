// Interactive Security Telemetry Dashboard
(function() {
    if (!window.Recharts || !window.React || !window.ReactDOM) return;

    const { AreaChart, Area, BarChart, Bar, PieChart, Pie, Cell, XAxis, YAxis, CartesianGrid, Tooltip, ResponsiveContainer, Legend } = window.Recharts;

    const yearlyThreatStats = [
        { name: '۲۰۲۱', badBots: 38000, withoutGuardify: 84, withGuardify: 1.2 },
        { name: '۲۰۲۲', badBots: 65000, withoutGuardify: 88, withGuardify: 0.9 },
        { name: '۲۰۲۳', badBots: 115000, withoutGuardify: 91, withGuardify: 0.7 },
        { name: '۲۰۲۴', badBots: 195000, withoutGuardify: 94, withGuardify: 0.5 },
        { name: '۲۰۲۵', badBots: 310000, withoutGuardify: 97, withGuardify: 0.4 },
        { name: '۲۰۲۶', badBots: 480000, withoutGuardify: 99.4, withGuardify: 0.2 },
    ];

    const sectorVulnerability = [
        { name: 'فروشگاه‌های ووکامرس (تسویه‌حساب)', attackRate: 68, without: 88, with: 0.4 },
        { name: 'سامانه‌های عضویت و ورود', attackRate: 54, without: 79, with: 0.6 },
        { name: 'فرم‌های تماس و لید', attackRate: 46, without: 94, with: 0.2 },
        { name: 'پورتال‌های سازمانی', attackRate: 38, without: 68, with: 0.5 },
        { name: 'دیدگاه‌ها و وبلاگ', attackRate: 32, without: 84, with: 0.3 },
    ];

    const globalTrafficComposition = [
        { name: 'کاربران انسانی واقعی', value: 50.4, color: '#10b981' },
        { name: 'ربات‌های پیشرفته مخرب (Bad Bots)', value: 32.8, color: '#ef4444' },
        { name: 'اسکریپت‌های ساده اسپم و اسکرپینگ', value: 16.8, color: '#f59e0b' },
    ];

    function AnalysisDashboard() {
        const [mode, setMode] = React.useState('yearly');
        
        return (
            <div className="w-full">
                <div className="flex flex-wrap justify-center gap-3 mb-8">
                    <button
                        onClick={() => setMode('yearly')}
                        className={`px-6 py-2.5 rounded-2xl text-xs font-black transition-all ${
                            mode === 'yearly' 
                            ? 'bg-indigo-600 text-white shadow-xl shadow-indigo-600/30' 
                            : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-300 dark:border-slate-700 hover:border-indigo-500/50'
                        }`}
                    >
                        روند رشد سالانه حملات (۲۰۲۱ - ۲۰۲۶)
                    </button>
                    <button
                        onClick={() => setMode('sector')}
                        className={`px-6 py-2.5 rounded-2xl text-xs font-black transition-all ${
                            mode === 'sector' 
                            ? 'bg-indigo-600 text-white shadow-xl shadow-indigo-600/30' 
                            : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-300 dark:border-slate-700 hover:border-indigo-500/50'
                        }`}
                    >
                        نرخ نفوذ اسپم در فرم‌های مختلف
                    </button>
                    <button
                        onClick={() => setMode('share')}
                        className={`px-6 py-2.5 rounded-2xl text-xs font-black transition-all ${
                            mode === 'share' 
                            ? 'bg-indigo-600 text-white shadow-xl shadow-indigo-600/30' 
                            : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-300 dark:border-slate-700 hover:border-indigo-500/50'
                        }`}
                    >
                        سهم ترافیک ربات‌ها در کل وب (Imperva)
                    </button>
                </div>

                <div className="h-[430px] w-full" style={{ direction: 'ltr' }}>
                    <ResponsiveContainer width="100%" height="100%">
                        {mode === 'yearly' && (
                            <AreaChart data={yearlyThreatStats} margin={{ top: 10, right: 30, left: 0, bottom: 0 }}>
                                <defs>
                                    <linearGradient id="gradRed" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="5%" stopColor="#ef4444" stopOpacity={0.4}/>
                                        <stop offset="95%" stopColor="#ef4444" stopOpacity={0}/>
                                    </linearGradient>
                                    <linearGradient id="gradGreen" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="5%" stopColor="#10b981" stopOpacity={0.4}/>
                                        <stop offset="95%" stopColor="#10b981" stopOpacity={0}/>
                                    </linearGradient>
                                </defs>
                                <CartesianGrid strokeDasharray="3 3" vertical={false} stroke="rgba(99,102,241,0.15)" />
                                <XAxis dataKey="name" stroke="#64748b" tick={{ fill: 'currentColor' }} fontSize={12} fontWeight={700} tickLine={false} axisLine={false} dy={15} />
                                <YAxis stroke="#64748b" tick={{ fill: 'currentColor' }} fontSize={11} fontWeight={700} tickLine={false} axisLine={false} tickFormatter={(val) => `${val}٪`} />
                                <Tooltip
                                    contentStyle={{ backgroundColor: '#0f172a', borderColor: 'rgba(255,255,255,0.2)', borderRadius: '1.5rem', color: '#f8fafc', boxShadow: '0 20px 40px -10px rgba(0,0,0,0.6)' }}
                                    itemStyle={{ color: '#f8fafc', fontWeight: 'bold' }}
                                    labelStyle={{ color: '#38bdf8', fontWeight: 800, marginBottom: '4px' }}
                                />
                                <Legend verticalAlign="top" height={50} iconType="circle" wrapperStyle={{ paddingBottom: '12px', fontWeight: 700 }} />
                                <Area type="monotone" dataKey="withoutGuardify" name="درصد نفوذ اسپم بدون محافظت (آسیب‌پذیر)" stroke="#ef4444" fillOpacity={1} fill="url(#gradRed)" strokeWidth={3.5} />
                                <Area type="monotone" dataKey="withGuardify" name="درصد نفوذ با گاردفای پرو (مهار ۹۹.۴٪)" stroke="#10b981" fillOpacity={1} fill="url(#gradGreen)" strokeWidth={3.5} />
                            </AreaChart>
                        )}

                        {mode === 'sector' && (
                            <BarChart data={sectorVulnerability} margin={{ top: 10, right: 30, left: 10, bottom: 30 }}>
                                <CartesianGrid strokeDasharray="3 3" vertical={false} stroke="rgba(99,102,241,0.15)" />
                                <XAxis dataKey="name" stroke="#64748b" tick={{ fill: 'currentColor' }} fontSize={11} fontWeight={700} tickLine={false} axisLine={false} dy={15} angle={-15} textAnchor="end" />
                                <YAxis stroke="#64748b" tick={{ fill: 'currentColor' }} fontSize={11} fontWeight={700} tickLine={false} axisLine={false} tickFormatter={(val) => `${val}٪`} />
                                <Tooltip
                                    contentStyle={{ backgroundColor: '#0f172a', borderColor: 'rgba(255,255,255,0.2)', borderRadius: '1.5rem', color: '#f8fafc' }}
                                    itemStyle={{ color: '#f8fafc', fontWeight: 'bold' }}
                                    labelStyle={{ color: '#38bdf8', fontWeight: 800, marginBottom: '4px' }}
                                />
                                <Legend verticalAlign="top" height={50} iconType="circle" wrapperStyle={{ paddingBottom: '12px', fontWeight: 700 }} />
                                <Bar dataKey="without" name="درصد اسپم موفق بدون کپچا" fill="#ef4444" radius={[8, 8, 0, 0]} />
                                <Bar dataKey="with" name="درصد نفوذ با گاردفای پرو (تقریباً صفر)" fill="#10b981" radius={[8, 8, 0, 0]} />
                            </BarChart>
                        )}

                        {mode === 'share' && (
                            <PieChart>
                                <Tooltip
                                    contentStyle={{ backgroundColor: '#0f172a', borderColor: 'rgba(255,255,255,0.2)', borderRadius: '1.5rem', color: '#f8fafc' }}
                                    itemStyle={{ color: '#f8fafc', fontWeight: 'bold' }}
                                    labelStyle={{ color: '#38bdf8', fontWeight: 800 }}
                                    formatter={(val) => `${val}٪`}
                                />
                                <Legend verticalAlign="bottom" height={40} iconType="circle" wrapperStyle={{ fontWeight: 700 }} />
                                <Pie data={globalTrafficComposition} dataKey="value" nameKey="name" cx="50%" cy="50%" outerRadius={130} innerRadius={60} paddingAngle={4} label={(entry) => `${entry.name}: ${entry.value}٪`}>
                                    {globalTrafficComposition.map((entry, index) => (
                                        <Cell key={`cell-${index}`} fill={entry.color} />
                                    ))}
                                </Pie>
                            </PieChart>
                        )}
                    </ResponsiveContainer>
                </div>
            </div>
        );
    }

    // Core Web Vitals & Load Performance Dataset
    const vitalsData = [
        { metric: 'زمان بزرگ‌ترین محتوا (LCP)', external: 3800, guardify: 850, unit: 'ms' },
        { metric: 'تاخیر تعامل کاربر (INP)', external: 280, guardify: 14, unit: 'ms' },
        { metric: 'زمان دریافت اولین بایت (TTFB)', external: 420, guardify: 25, unit: 'ms' },
        { metric: 'زمان بلاک ترد اصلی (TBT)', external: 490, guardify: 0, unit: 'ms' },
    ];

    const payloadData = [
        { metric: 'حجم کدهای جاوااسکریپت (KB)', external: 680, guardify: 18, unit: 'KB' },
        { metric: 'تعداد درخواست‌های شبکه (Req)', external: 9, guardify: 1, unit: 'Req' },
        { metric: 'داده‌های ارسال تله‌متری (KB)', external: 42, guardify: 0, unit: 'KB' },
    ];

    const pagespeedScores = [
        { metric: 'امتیاز لایت‌هاوس موبایل', external: 58, guardify: 96, unit: '/100' },
        { metric: 'امتیاز لایت‌هاوس دسکتاپ', external: 71, guardify: 99, unit: '/100' },
        { metric: 'شاخص سلامت سئو تکنیکال', external: 82, guardify: 100, unit: '/100' },
    ];

    function WebVitalsDashboard() {
        const [tab, setTab] = React.useState('vitals');

        const activeData = tab === 'vitals' ? vitalsData : tab === 'payload' ? payloadData : pagespeedScores;
        const yAxisFormatter = (val) => {
            if (tab === 'vitals') return `${val}ms`;
            if (tab === 'payload') return `${val}`;
            return `${val}`;
        };

        return (
            <div className="w-full">
                <div className="flex flex-wrap items-center justify-center gap-2.5 mb-8">
                    <button
                        onClick={() => setTab('vitals')}
                        className={`px-5 py-2.5 rounded-2xl text-xs font-black transition-all ${
                            tab === 'vitals'
                            ? 'bg-indigo-600 text-white shadow-xl shadow-indigo-600/30'
                            : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-300 dark:border-slate-700 hover:border-indigo-500/50'
                        }`}
                    >
                        <i className="fas fa-gauge-high ml-2"></i>
                        شاخص‌های زمان و تاخیر (Core Web Vitals)
                    </button>
                    <button
                        onClick={() => setTab('payload')}
                        className={`px-5 py-2.5 rounded-2xl text-xs font-black transition-all ${
                            tab === 'payload'
                            ? 'bg-indigo-600 text-white shadow-xl shadow-indigo-600/30'
                            : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-300 dark:border-slate-700 hover:border-indigo-500/50'
                        }`}
                    >
                        <i className="fas fa-file-zipper ml-2"></i>
                        کاهش حجم لود و تعداد ریکوئست‌ها
                    </button>
                    <button
                        onClick={() => setTab('scores')}
                        className={`px-5 py-2.5 rounded-2xl text-xs font-black transition-all ${
                            tab === 'scores'
                            ? 'bg-indigo-600 text-white shadow-xl shadow-indigo-600/30'
                            : 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-300 dark:border-slate-700 hover:border-indigo-500/50'
                        }`}
                    >
                        <i className="fas fa-chart-line ml-2"></i>
                        امتیاز عملکرد Google PageSpeed
                    </button>
                </div>

                <div className="h-[400px] w-full" style={{ direction: 'ltr' }}>
                    <ResponsiveContainer width="100%" height="100%">
                        <BarChart
                            data={activeData}
                            margin={{ top: 20, right: 30, left: 10, bottom: 40 }}
                            barGap={10}
                        >
                            <CartesianGrid strokeDasharray="3 3" vertical={false} stroke="rgba(99,102,241,0.15)" />
                            <XAxis
                                dataKey="metric"
                                stroke="#64748b"
                                tick={{ fill: 'currentColor' }}
                                fontSize={12}
                                fontWeight={700}
                                tickLine={false}
                                axisLine={false}
                                dy={14}
                            />
                            <YAxis
                                stroke="#64748b"
                                tick={{ fill: 'currentColor' }}
                                fontSize={11}
                                fontWeight={700}
                                tickLine={false}
                                axisLine={false}
                                tickFormatter={yAxisFormatter}
                            />
                            <Tooltip
                                contentStyle={{
                                    backgroundColor: '#0f172a',
                                    borderColor: 'rgba(255,255,255,0.2)',
                                    borderRadius: '1.2rem',
                                    color: '#f8fafc',
                                    fontSize: '12px',
                                    fontWeight: 'bold',
                                    boxShadow: '0 20px 40px -10px rgba(0,0,0,0.6)'
                                }}
                                itemStyle={{ color: '#f8fafc', fontWeight: 'bold' }}
                                labelStyle={{ color: '#38bdf8', fontWeight: 800, marginBottom: '4px' }}
                                formatter={(val, name, item) => [`${val} ${item.payload.unit}`, name]}
                            />
                            <Legend
                                verticalAlign="top"
                                height={45}
                                iconType="circle"
                                wrapperStyle={{ paddingBottom: '12px', fontWeight: 700 }}
                            />
                            <Bar
                                dataKey="external"
                                name="کپچای آنلاین خارجی (گوگل / کلودفلر)"
                                fill="#ef4444"
                                radius={[8, 8, 0, 0]}
                                maxBarSize={55}
                            />
                            <Bar
                                dataKey="guardify"
                                name="گاردفای پرو (آفلاین و بهینه‌شده)"
                                fill="#10b981"
                                radius={[8, 8, 0, 0]}
                                maxBarSize={55}
                            />
                        </BarChart>
                    </ResponsiveContainer>
                </div>

                <div className="mt-8 pt-6 border-t border-[var(--border-current)] grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                    <div className="p-4 rounded-2xl bg-emerald-500/10 dark:bg-emerald-500/15 border border-emerald-500/30 shadow-sm">
                        <div className="text-xl font-black text-emerald-600 dark:text-emerald-400">۹۷٪ کاهش حجم</div>
                        <div className="text-xs text-slate-700 dark:text-slate-200 mt-1 font-bold">صرفه‌جویی پهنای باند و سرعت دانلود</div>
                    </div>
                    <div className="p-4 rounded-2xl bg-indigo-500/10 dark:bg-indigo-500/15 border border-indigo-500/30 shadow-sm">
                        <div className="text-xl font-black text-indigo-600 dark:text-indigo-400">۷۷٪ بهبود LCP</div>
                        <div className="text-xs text-slate-700 dark:text-slate-200 mt-1 font-bold">تایید ۱۰۰٪ فاکتور حیاتی گوگل</div>
                    </div>
                    <div className="p-4 rounded-2xl bg-purple-500/10 dark:bg-purple-500/15 border border-purple-500/30 shadow-sm">
                        <div className="text-xl font-black text-purple-600 dark:text-purple-400">امتیاز ۹۸ لایت‌هاوس</div>
                        <div className="text-xs text-slate-700 dark:text-slate-200 mt-1 font-bold">ارتقای رتبه سئو و رضایت کاربران</div>
                    </div>
                </div>
            </div>
        );
    }

    const chartTarget = document.getElementById('traffic-chart-root');
    if (chartTarget) {
        const dashboardRoot = ReactDOM.createRoot(chartTarget);
        dashboardRoot.render(<AnalysisDashboard />);
    }

    const vitalsTarget = document.getElementById('web-vitals-chart-root');
    if (vitalsTarget) {
        const vitalsRoot = ReactDOM.createRoot(vitalsTarget);
        vitalsRoot.render(<WebVitalsDashboard />);
    }
})();
